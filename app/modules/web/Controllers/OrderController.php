<?php

namespace App\Modules\Web\Controllers;
use App\CouponCode;
use App\Helpers\GenerateNumber;
use App\Helpers\RttTntExpress;
use App\Helpers\TntExpress;
use App\OrderDetail;
use App\OrderHead;
use App\OrderTmp;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\ProductGroup;
use App\Customer;
use App\DeliveryDetails;
use DB;
use Session;
use Input;
use Eway;
use Eway\Rapid\Enum\ApiMethod;
use Eway\Rapid\Enum\ShippingMethod;
use Eway\Rapid\Enum\TransactionType;
use Eway\Rapid\Model\Response\CreateTransactionResponse;
use Eway\Rapid;
use Eway\Rapid\Client;
use App\Helpers\SendMailer;
use App\Helpers\ZipPay;


class OrderController extends Controller
{

    public function update_cart(Request $request){

        if(isset($_POST)){
            
            $quantity= (int) $_POST['quantity'];
            $product_id= (int) $_POST['product_id'];
            $product_index= (int) $_POST['product_index'];
            $color= $_POST['color'];

            $product_cart1 = $request->session()->get('product_cart');
            unset($product_cart1[$product_index]);

            $product_cart_2 = array( 
                    array('product_id' => $product_id,
                            'color' => $color,
                            'quantity' => $quantity
                    ) 
                );

            $result = array_merge($product_cart1, $product_cart_2);

            $set_array_value = array_values($result);
            $request->session()->set('product_cart', $set_array_value);

            return redirect('mycart');
        }
    }

    public function remove_cart(Request $request){

        if(isset($_POST)){
            $product_index= (int) $_POST['product_index'];
            $product_cart1 = $request->session()->get('product_cart');
            unset($product_cart1[$product_index]);
            $set_array_value = array_values($product_cart1);
            $request->session()->set('product_cart', $set_array_value);

            return redirect('mycart');
        }
    }

	public function add_to_cart(Request $request){

		if(isset($_POST)){


            $input = $request->all();

            $product_id = (int) $_POST['product_id'];
            $product_price = isset($input['price_asim'])? $input['price_asim'] : null; //$_POST['price_amount'];
            $weight = isset($_POST['weight'])?$_POST['weight']:null;
            $volume = isset($_POST['volume'])?$_POST['volume']:null;

			if(isset($_POST['color'])){
				$color = $_POST['color'];
			}else{
				$color = '';
			}


            if(isset($_POST['background'])){
                $background = $_POST['background'];
            }else{
                $background = '';
            }

            if(isset($_POST['text_of_number_plate'])){
                $plate_text = $_POST['text_of_number_plate'];
            }else{
                $plate_text = '';
            }
			
            $quantity = (int) $_POST['quantity'];

            $product_cart1 = $request->session()->get('product_cart');

            $product_cart_2 = array( 
                array(
                        'product_id' => $product_id,
                        'color' => $color,
                        'quantity' => $quantity,
                        'background' => $background,
                        'product_price' => $product_price,
                        'plate_text' => $plate_text,
                        'volume' => $volume,
                        'weight' => $weight
                )
            );

            if($request->session()->has('product_cart')){

                $result = array_merge($product_cart1, $product_cart_2);
            }else{
                $result = $product_cart_2;
            }

            $request->session()->set('product_cart', $result);

			return redirect('mycart');
		}
		
	}

	public function add_to_cart_update(Request $request){
		$quantity = $_POST['quantity'];
		$request->session()->set('quantity', $quantity);
		return redirect('mycart');
	}

	public function ordercheckout(Request  $request){
        $input = $request->all();
        $coupon_code = isset($input['coupon_code'])?$input['coupon_code']:null;
        $today = date('Y-m-d');

        if($coupon_code){

            $coupon_exists = CouponCode::where('code','=', $coupon_code)->where('expiry_date', '>', $today)->exists();
            if($coupon_exists){
                $coupon_data = CouponCode::where('code','=', $coupon_code)->first();

                $request->session()->set('coupon_value', $coupon_data['value']);
                $request->session()->set('coupon_code', $coupon_code);
                $request->session()->forget('coupon_status');
                $request->session()->set('coupon_status', 'Your Coupon code is Valid ! Your discount will be added into the payment ');
            }else{
                $request->session()->forget('coupon_status');
				$request->session()->forget('coupon_code');
				$request->session()->forget('coupon_value');
                $request->session()->set('coupon_status', ' Coupon code is invalid ! Please try again !');
            }
        }

		return redirect('customerlogin');
	}

    /*public function savedeliverydetails(Request $request)
    {
        $input = $request->all();
        $user_id = $request->session()->get('user_id');
        $input['user_id'] = $user_id;
         DB::beginTransaction();
        try {
            
            $delivery = DeliveryDetails::create($input);
            DB::commit();
            Session::flash('flash_message', 'Successfully added!');
            $lastInsertedId= $delivery->id;
            $request->session()->set('deliver_id', $lastInsertedId);
        }catch (\Exception $e) {

            //If there are any exceptions, rollback the transaction`
            DB::rollback();
            Session::flash('flash_message_error', $e->getMessage());

            return redirect()->route('order-delivery-detail');
        }
        
        return redirect()->route('order-check-order');
        
    }*/

    public function savedeliverydetails(Requests\BillingaddressRequest $request)
    {
        $input = $request->all();
        $user_id = $request->session()->get('user_id');
        $deliver_id = $request->session()->get('deliver_id');
		
		
		$delivery_data =DeliveryDetails::where('user_id',$user_id)->orderby('id','desc')->first();


        $input['user_id'] = $user_id;

        DB::beginTransaction();
        try {
            if(!empty($delivery_data)) {
                //$model = DeliveryDetails::where('id',$deliver_id)->first();
                $delivery_data->update($input);
				$request->session()->set('deliver_id', $delivery_data->id);
            }else{
                $model = new DeliveryDetails();
                $delivery = $model->create($input);
                $lastInsertedId= $delivery->id;
                $request->session()->set('deliver_id', $lastInsertedId);
            }

            //print_r($delivery);exit;

            DB::commit();
            Session::flash('flash_message', 'Successfully added!');

        }catch (\Exception $e) {

            //If there are any exceptions, rollback the transaction`
            DB::rollback();
            Session::flash('flash_message_error', $e->getMessage());

            return redirect()->route('order-delivery-detail');
        }

        return redirect()->route('order-check-order');

    }

    public function customerlogin(Request $request){

        
        if(Session::has('user_id')){
          return redirect()->route('order-billing-address');  
        }

        $input = $request->all();
        $password = sha1(Input::get('password'));
        $input['password'] = $password;  
        $email = Input::get('email');

        $check_customer_data = DB::table('customer')->where('email',$email)->where('password',$password)->first(); 

        if(!empty($check_customer_data)){
            $request->session()->set('user_id', $check_customer_data->id);

            if(Session::has('redirect_value') && Session::get('redirect_value') == 'myaccount' ){
                return redirect()->route(Session::get('redirect_value') );
            }else{
                return redirect()->route('mycart');
            }
            
        }else{
            Session::flash('flash_message_error', 'Username and password not match');
            return redirect()->route('customerlogin');
        }
    }

	 public function customerregister(Requests\CustomerRequest $request)
    {

    	$input = $request->all();
    	$password = sha1(Input::get('password'));
    	$input['password'] = $password;

    	 DB::beginTransaction();
        try {
            
            $customer = Customer::create($input);
            DB::commit();
            Session::flash('flash_message', 'Successfully added!');
            $lastInsertedId= $customer->id;
            $request->session()->set('user_id', $lastInsertedId);
        }catch (\Exception $e) {

            //If there are any exceptions, rollback the transaction`
            DB::rollback();
            Session::flash('flash_message_error', $e->getMessage());

            return redirect()->route('register');	
        }
        $product_id = $request->session()->get('product_id');

        if(!empty($product_id)){
        	return redirect()->route('order-billing-address');
        }else{
        	return redirect()->route('customerlogin');	
        }
        
    }


    public function customersavebilling(Requests\BillingaddressRequest $request){

        $user_id = $request->session()->get('user_id');
        $model = Customer::where('id',$user_id)->first();

        $input = $request->all();
       

         DB::beginTransaction();
        try {
            
            $model->update($input);
            DB::commit();
            Session::flash('flash_message', 'Successfully added!');
            
        }catch (\Exception $e) {

            //If there are any exceptions, rollback the transaction`
            DB::rollback();
            Session::flash('flash_message_error', $e->getMessage());

            return redirect()->route('order-billing-address');   
        }
        
        return redirect()->route('order-delivery-detail');
    }

    public function billingaddress(Request $request){
    	$user_id = $request->session()->get('user_id');
    	$productgroup_data = ProductGroup::where('status','active')->orderby('sortorder','asc')->get();
    	$billing_data = DB::table('customer')->where('id',$user_id)->first();
    	$title = "Billing address | Asims Toy";

    	$data = DB::table('customer')->where('id',$user_id)->first();
    	return view('web::cart.billingaddress',[
                'billing_data' => $billing_data,
                'title' => $title,
                'productgroup_data' => $productgroup_data,
                'data' => $data
            ]);
    }

    public function deliverydetails(Request $request){
        $user_id = $request->session()->get('user_id');
		
		$deliver_id = $request->session()->get('deliver_id');
		
		$delivery_data = DB::table('delivery_details')->where('user_id',$user_id)->orderBy('id','desc')->first();
		
		
        $productgroup_data = ProductGroup::where('status','active')->orderby('sortorder','asc')->get();
        $billing_data = DB::table('customer')->where('id',$user_id)->first();
        $title = "Delivery details | Asims Toy";
		
		if(!empty($deliver_id)){
			$data = DB::table('delivery_details')->where('user_id',$user_id)->orderBy('id','desc')->first();
		}else if(!empty($delivery_data)){
			$data = DB::table('delivery_details')->where('user_id',$user_id)->orderBy('id','desc')->first();
		}
		else{
			$data = DB::table('customer')->where('id',$user_id)->first();
		}
        
        return view('web::cart.deliverydetails',[
                'billing_data' => $billing_data,
                'title' => $title,
                'productgroup_data' => $productgroup_data,
                'data' => $data
            ]);
    }

    public function orderconfirm(Request $request){

        $title ="My Cart | Asim's Toy";

        $productgroup_data = ProductGroup::where('status','active')->orderby('sortorder','asc')->get();

        $product_cart = $request->session()->get('product_cart');
        $user_id = $request->session()->get('user_id');
        $deliver_id = $request->session()->get('deliver_id');
        $user_data = DB::table('customer')->where('id',$user_id)->first();
        $delivery_data = DB::table('delivery_details')->where('id',$deliver_id)->orderBy('id', 'desc')->first();

        /*print_r($product_cart);
        print "User ID: ";
        print_r($user_id);
        print "\n";
        print "Delivery ID: ";
        print_r($deliver_id);
        print "\n";
        print "User Data: ";
        print_r($user_data->id);
        print "\n";
        print "Delivery Data: ";
        print_r($delivery_data);
        exit();*/



        DB::beginTransaction();
        try
        {
			
            foreach ($product_cart as $values)
            {

                #print_r($values);exit();
                $product = Product::findOrFail($values['product_id']);

                $product_data [] =array(
                    'product_id'=> $product['id'],
                    'product_group_id'=> $product['product_group_id'],
                    'weight'=> $product['weight'],
                    'length'=> $product['length'],
                    'width'=> $product['width'],
                    'height'=> $product['height'],
                );
					
				if($product['product_group_id'] == '3' || $product['product_group_id'] == '4' || $product['product_group_id'] == '9'){
					
					//freight Calculation
					$freight_calculation = RttTntExpress::rtt_call($user_data, $delivery_data, $product_data);
					$freight_charge = $freight_calculation[0]['price'][0] * $values['quantity'];
					
				}
					
				
				

                //store to order tmp table
                $model = new OrderTmp();

                $order_tmp_exists = $model->where('user_id', $user_data->id)->where('product_id', $product['id'])->exists();
				
                if($order_tmp_exists == null)
                {
                    $model->user_id = $user_data->id;
                    $model->delivery_id= $delivery_data->id;
                    $model->date= Date('Y-m-d');
                    $model->product_id= isset($product['id'])?$product['id']:null;
                    $model->product_type= isset($values['product_type'])?$values['product_type']:null;
                    $model->color= isset($values['color'])?$values['color']:null;
                    $model->quantity= isset($values['quantity'])?$values['quantity']:null;
                    $model->background= isset($values['background'])?$values['background']:null;
                    $model->product_price= isset($values['product_price'])?$values['product_price']:null;
                    $model->plate_text= isset($values['plate_text'])?$values['plate_text']:null;
                    $model->volume= isset($values['volume'])?$values['volume']:null;
                    $model->weight= isset($values['weight'])?$values['weight']:null;
                    $model->freight_charge= isset($freight_charge)?$freight_charge:0;
                    $model->save();
					
					$freight_charge =0;
                    DB::commit();

                    #remove cart
                    $request->session()->forget('product_cart');    

                }

            }
        }
        catch (\Exception $e)
        {
            //If there are any exceptions, rollback the transaction`
            DB::rollback();
            Session::flash('flash_message_error', $e->getMessage());

        }
		
		

        $product_cart_order_tmp = OrderTmp::where('user_id', $user_data->id)->get()->toArray();
		


        return view('web::cart.finalcart',[
                'title' => $title,
                'productgroup_data' => $productgroup_data,
                'product_cart_r' => $product_cart_order_tmp,
                'user_data' => $user_data,
                'delivery_data' => $delivery_data,
                #'freight_calculation' => $freight_calculation,
            ]);
    }


    public function paynow(Request $request)
    {
        $input_data = $request->all();

        $title ="mycart | Asim's Toy";
        #$productgroup_data = ProductGroup::where('status','active')->orderby('sortorder','asc')->get();
        $product_id = $request->session()->get('product_id');
        $quantity = $request->session()->get('quantity');
        $color = $request->session()->get('color');
        $background = @$request->session()->get('background');
        $plate_text = @$request->session()->get('plate_text');
        $user_id = $request->session()->get('user_id');
        $deliver_id = $request->session()->get('deliver_id');
        #$freight_calculation = $input_data['freight_calculation'];//$request->session()->get('freight_calculation');

        $user_data = DB::table('customer')->where('id',$user_id)->first();
        #$delivery_data = DB::table('delivery_details')->where('id',$deliver_id)->orderBy('id', 'desc')->first();

        //Store to Order Head and Details
        $product_cart = OrderTmp::where('user_id', $user_id)->get()->toArray();


        if($product_cart)
        {
            $gen_number = GenerateNumber::generate_number();

            //Total Price
            $total_price = $input_data['total_amount'];
            $total_freight_charge = $input_data['total_freight_charge'];


            //coupon code
            $coupon_value = $request->session()->get('coupon_value');
            $discount_price = ($total_price * $coupon_value)/100;
            $total_discount_price = $discount_price? $discount_price: 0;

            $order_head_data = [
                'invoice_no'=>$gen_number[0],
                'user_id'=>$user_id,
                'total_discount_price'=>$total_discount_price,
                'vat'=>0,
                'freight_amount' => $total_freight_charge,
                'sub_total' => $total_price - $total_discount_price, //$total_price,
                'net_amount'=> $total_price - $total_discount_price + $total_freight_charge, //$total_price+$freight_calculation,
                'status'=> 1,
            ];

            DB::beginTransaction();
            try
            {
                $model = new OrderHead();
                if($order_head = $model->create($order_head_data))
                {
                    foreach ($product_cart as $products)
                    {
                        $model_order_dt = new OrderDetail();
                        $model_order_dt->order_head_id = $order_head['id']; //$order_head->id;
                        $model_order_dt->product_id =$products['product_id']?$products['product_id']:null;
                        $model_order_dt->product_variation_id = $products['color']?$products['color']:null;
                        $model_order_dt->qty = $products['quantity']?$products['quantity']:null;
                        $model_order_dt->color = $products['color']?$products['color']:null;
                        $model_order_dt->background_color = $products['background']?$products['background']:null;
                        $model_order_dt->plate_text = $products['plate_text']?$products['plate_text']:null;
                        $model_order_dt->price = $products['product_price']?$products['product_price']:null; //$product->sell_rate;
                        $model_order_dt->status =1;
                        $model_order_dt->save();

                    }
                    DB::table('order_tmp')->where('user_id', '=', $user_id)->delete();
                }

                DB::commit();
                Session::flash('flash_message', 'Success !');

                #$request->session()->forget('freight_calculation');
                $request->session()->forget('product_cart');
				$request->session()->forget('coupon_value');
				$request->session()->forget('coupon_code');
				
                $request->session()->set('invoice_no', $order_head['invoice_no']);
                $request->session()->set('total_price', $total_price);
                $request->session()->set('customer_data', $user_data);

            }catch(\Exception $e){

                //If there are any exceptions, rollback the transaction`
                DB::rollback();
                Session::flash('flash_message_error', $e->getMessage());
            }

            //send email
            $to_email = $user_data->email;
            $to_name = $user_data->first_name." ". $user_data->last_name;
            $subject = "Order placed  # ".$order_head->invoice_no. " | Asims Toys ";
            $body = "Dear ".$user_data->first_name. " Your Order is placed !";
            $mail = SendMailer::send_mail_by_php_mailer($to_email, $to_name, $subject, $body);

        }else{
            Session::flash('flash_message_error', "No Product is available in cart");
            return redirect()->route('mycart');
        }


        return redirect()->route('payment_process_secure', array(
            'order_head_id'=>$order_head->id
        ));


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_order_tmp($order_tmp_id)
    {
        try {
            $model = OrderTmp::findOrFail($order_tmp_id);
            if ($model->delete()) {
                Session::flash('flash_message', " Successfully Deleted.");
                return redirect()->back();
            }
        } catch(\Exception $e) {
            Session::flash('flash_message_error',$e->getMessage() );
            return redirect()->back();
        }
    }


    public function payment_process_secure(Request $request, $order_head_id)
    {

        $title ="Secure Payment | Asim's Toy";

        $user_id = $request->session()->get('user_id');
        $total_price = $request->session()->get('total_price');
        $customer_data = $request->session()->get('customer_data');
        $freight_calculation = $request->session()->get('freight_calculation');

        $order_head = OrderHead::findOrFail($order_head_id);

        $freight_amount =isset($order_head->freight_amount) ? $order_head->freight_amount : 0;
        $sub_total =isset($order_head->sub_total) ? $order_head->sub_total : 0;
        $net_amount =isset($order_head->net_amount) ? $order_head->net_amount : 0;

        
        $discount_price = isset($order_head->total_discount_price) ? $order_head->total_discount_price : 0;
		
        $net_amount = $net_amount - @$discount_price;
		$total_price = $net_amount + @$discount_price;
		

        //setter
        $request->session()->set('net_amount', $net_amount);


        return view('web::cart.paycart',[
            'title' => $title,
            'invoice_number' => $order_head['invoice_no'],
            'user_id' => $user_id,
            'total_price' => $total_price,
            'customer_data' => $customer_data,
            'discount_price' => $discount_price?$discount_price:0,
            'net_amount' => $net_amount?$net_amount:0,
        ]);

    }

    public function payment_method_complete(Request $request)
    {
        if($request){

            $request->session()->forget('product_cart');

            $title = "Complete the Payment ";
            $input_data = $request->all();

            if(count($input_data)>0){
                if($input_data['payment_method']=='e_way')
                {
                    $invoice_number = $input_data['invoice_number'];// $request->session()->get('invoice_no');
                    $order_head = OrderHead::where('invoice_no', $invoice_number)->first();

                    $customer = Customer::findOrFail($order_head['user_id']);

                    $user_id = $order_head['user_id']; //$request->session()->get('user_id');
                    $total_price = $order_head['net_amount']; //$request->session()->get('total_price');
                    $customer_data = $customer; // $request->session()->get('customer_data');
                    $freight_calculation = $order_head['freight_amount']; //$request->session()->get('freight_calculation');


                    // Update Invoice
                    DB::table('order_head')->where('invoice_no', $invoice_number)->update(['invoice_type' => 'eway']);

                    $request->session()->forget('product_cart');

                    return view('web::cart.e_way_payment',[
                        'title' => $title,
                        'invoice_number' => $invoice_number,
                        'user_id' => $user_id,
                        'eway_total_price_format' => $order_head['net_amount']*100, //($total_price+$freight_calculation)*100,
                        'total_price' => $order_head['net_amount'], //$total_price+$freight_calculation,
                        'customer_data' => $customer_data,
                    ]);

                }
                else if($input_data['payment_method']=='pre_order')
                {
                    // Update Invoice
                    $invoice_number = $input_data['invoice_number']; //$request->session()->get('invoice_no');
                    DB::table('order_head')->where('invoice_no', $invoice_number)->update(['invoice_type' => 'pre-order']);
                    $order_head = OrderHead::where('invoice_no', $invoice_number)->first();

                    Session::flash('flash_message', "Successfully Added Pre-Order Process.");
                    return redirect()->route('details_of_pre_order', $order_head->id);
                }
                else if($input_data['payment_method']=='zip_pay')
                {
                    $invoice_number = $input_data['invoice_number'];
                    $order_head = OrderHead::where('invoice_no', $invoice_number)->first();
                    $customer = Customer::findOrFail($order_head['user_id']);

                    $user_id = $order_head['user_id'];
                    $customer_data = $customer;

                    // Update Invoice
                    DB::table('order_head')->where('invoice_no', $invoice_number)->update(['invoice_type' => 'zip-pay']);

                    $request->session()->forget('product_cart');

                    return view('web::cart.zip_pay_page',[
                        'title' => $title,
                        'invoice_number' => $invoice_number,
                        'user_id' => $user_id,
                        'eway_total_price_format' => $order_head['net_amount']*100,
                        'total_price' => $order_head['net_amount'],
                        'customer_data' => $customer_data,
                    ]);
                }
                else
                {
                    // Update Invoice
                    $invoice_number = $input_data['invoice_number']; //$request->session()->get('invoice_no');
                    DB::table('order_head')->where('invoice_no', $invoice_number)->update(['invoice_type' => 'layby']);
                    $order_head = OrderHead::where('invoice_no', $invoice_number)->first();

                    Session::flash('flash_message', "Successfully Added Lay-by Process.");
                    return redirect()->route('details_of_lay_by', $order_head->id);
                }
            }else{
                return redirect('mycart');
            }


        }else{
            return redirect('mycart');
        }




    }

    /**
     * @param $invoice_no
     * @param $amount
     * @param $customer_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirect_e_way_d($invoice_no, $amount, $customer_id){

        $order_head = OrderHead::where('invoice_no', $invoice_no)->first();
        $order_head->status = 'done';

		

        try{
            if($order_head->save()){
                $customer = Customer::where('id', $customer_id)->first();
                $to_email = $customer->email;
                $to_name = $customer->first_name." ". $customer->last_name;
				
				
				$delivery_details = DB::table('delivery_details')->where('user_id',$customer->id)->orderby('id','desc')->first();
                $to_email = $customer->email;
                $to_name = $customer->first_name." ". $customer->last_name;

                $subject = " Payment of invoice # ".$invoice_no. " | Asims Toys ";
                //$body = "Dear ".$to_name. " Your Payment is approved !<br/><br/> Your Invoice no is: ".$invoice_no;
				
				$product_cart_r = DB::table('order_detail')->where('order_head_id',$order_head->id)->get();
				
				$body = view('web::cart.order_details_mail',[
					'product_cart_r' => $product_cart_r,
					'order_head' => $order_head,
					'customer' => $customer,
					'delivery_details' => $delivery_details
				]);


                $mail = SendMailer::send_mail_by_php_mailer($to_email, $to_name, $subject, $body);
				$mail_2 = SendMailer::send_mail_by_php_mailer('asimstoys@gmail.com', $to_name, $subject, $body);

                Session::flash('flash_message', "The Amount : ".$amount ." is DONE. Please check your email");
            }
        }catch(\exception $e){
            Session::flash('flash_message', "Payment Declined");
        }

        return redirect()->route('order_summery_lists');
    }

    /**
     * @param Request $request
     */
    public function e_way_payment(Request $request){

        $invoice_number = $request->session()->get('invoice_no');
        $user_id = $request->session()->get('user_id');
        $total_price = $request->session()->get('total_price');
        $customer_data = $request->session()->get('customer_data');

    }


    /**
     * @param $invoice_number
     */
    public function zip_pay_process($invoice_number)
    {
        if($invoice_number){
            $invoice_head = DB::table('order_head')->where('invoice_no',$invoice_number)->first();

            $invoice_detail = DB::table('order_detail')->where('order_head_id',$invoice_head->id)->get();

            if($invoice_head->user_id)
            {
                $customer_data = DB::table('customer')->where('id',$invoice_head->user_id)->first();
                $delivery_data = DB::table('delivery_details')->where('user_id',$invoice_head->user_id)->first();
            }
            

            $result = ZipPay::call_to_server($invoice_number, $invoice_head, $invoice_detail, $customer_data, $delivery_data);


            if ($result)
            {
                Session::flash('flash_message', $result);
                return redirect()->route('redirect_e_way_d', [
                    $invoice_number, $invoice_head->net_amount, $customer_data->id
                ]);
            }else{
                Session::flash('flash_message', "Failed payment. Please try again ");
                return redirect()->back();
            }

        }else{
            Session::flash('flash_message', "Missing Invoice. Please try again ");
            return redirect()->back();
        }

    }


    /**
     * @param $invoice_no
     * @return \Illuminate\Http\RedirectResponse
     */
    public function zip_pay_cancel($invoice_no)
    {
        $order_head = OrderHead::where('invoice_no', $invoice_no)->first();
        $order_head->status = 'cancel';


        try {
            $order_head->save();

        }catch(\exception $e){
            Session::flash('flash_message', "Payment Declined");
        }

        return redirect()->route('order_summery_lists');
    }

    /**
     * @param $invoice_no
     * @return \Illuminate\Http\RedirectResponse
     */
    public function zip_pay_error($invoice_no)
    {
        $order_head = OrderHead::where('invoice_no', $invoice_no)->first();
        $order_head->status = 'cancel';


        try {
            $order_head->save();

        }catch(\exception $e){
            Session::flash('flash_message', "Payment Declined");
        }

        return redirect()->route('order_summery_lists');
    }

    /**
     * @param $invoice_no
     * @return \Illuminate\Http\RedirectResponse
     */
    public function zip_pay_decline($invoice_no)
    {
        $order_head = OrderHead::where('invoice_no', $invoice_no)->first();
        $order_head->status = 'cancel';


        try {
            $order_head->save();

        }catch(\exception $e){
            Session::flash('flash_message', "Payment Declined");
        }

        return redirect()->route('order_summery_lists');
    }

    /**
     * @param $invoice_no
     * @return \Illuminate\Http\RedirectResponse
     */
    public function zip_pay_refer($invoice_no)
    {
        #$order_head = OrderHead::where('invoice_no', $invoice_no)->first();
        #$order_head->status = 'cancel';

        #try {
            #$order_head->save();
        #}catch(\exception $e){
        #    Session::flash('flash_message', "Payment Declined");
        #}

        return redirect()->route('order_summery_lists');
    }
}