<?php

namespace App\Modules\Web\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\ProductGroup;
use App\Product;
use App\Orderoverhead;
use App\Orderdetails;
use App\Customer;
use App\Deliverydetails;
use DB;
use Session;
use Input;
use Mail;
use App\Helpers\SendMailer;

use Excel;

class OrderController extends Controller
{

    public function test(Request $request){

        $user_id = $request->session()->get('billing_id');
       // $users = DB::table('customer')->where('id',$user_id)->first();
      

        $all_order = Orderoverhead::join('customer', 'customer.id', '=', 'order_overhead.user_id')
                        ->select('order_overhead.id as oid','customer.id as cid')
                        ->get();
        //$all_order = DB::table('order_overhead')->all()->toArray();
       
       
        Excel::create('users', function($excel) use($all_order) {
            $excel->sheet('Sheet 1', function($sheet) use($all_order) {
                $sheet->fromArray($all_order);
            });
        })->download('xls');




// or


        // Excel::create('users', function($excel) use($users) {
        //     $excel->sheet('Sheet 1', function($sheet) use($users) {
        //         $sheet->fromArray($users);
        //     });
        // })->export('xls');

        // $email = 'mithun.cse521@gmail.com';
        // $invoice_id = '11111';

        // $product_cart = $request->session()->get('product_cart');

        // $user_id = $request->session()->get('billing_id');
        // $deliver_id = $request->session()->get('deliver_id');

        // $user_data = DB::table('customer')->where('id',$user_id)->first();
        // $delivery_data = DB::table('deliverydetails')->where('id',$deliver_id)->orderBy('id', 'desc')->first();

        // Mail::send('web::cart.mail_template', array('user_data' =>$user_data,'delivery_data'=>$delivery_data,'product_cart_r' => $product_cart),
        // function($message) use ($email,$invoice_id)
        // {
        //     $message->from('test@edutechsolutionsbd.com', 'Purchase product | OFF THE WALL');
        //     $message->to($email);
        //     $message->cc('mithun.cse521@gmail.com', 'Purchase product | OFF THE WALL');
        //     // $message->replyTo('tanintjt.1990@gmail.com','User Signup Request');
        //     $message->subject('Your Order No is ' .$invoice_id );
        // });




        // $paypal_email = 'offthewallframing@gmail.com';
        // $return_url = '';
        // $cancel_url = '';
        // $notify_url = '';
        // $item_name = 'Test Item';
        // $item_amount = 5.00;

        // $querystring = '';

        //  // Firstly Append paypal account to querystring
        // $querystring .= "?business=".urlencode($paypal_email)."&";

        // $querystring .= "item_name=".urlencode('hello')."&";
        // $querystring .= "amount=".urlencode(100)."&";

        // $querystring .= "cmd=_xclick&";
        // //$querystring .= "item_number=MEM32507725&";
        // $querystring .= "tax=0&";
        // $querystring .= "quantity=1&";
        // $querystring .= "no_note=1&";
        // $querystring .= "currency_code=USD&";
        // $querystring .= "address_override=1&";
        // $querystring .= "first_name=Craig &";
        // $querystring .= "last_name=Anderson&";
        // $querystring .= "address1= Lot 5 Unit 2 Boundary st&";
        // $querystring .= "city=Tumut&";
        // $querystring .= "state=NSW&";
        // $querystring .= "zip=2720&";
        // $querystring .= "country=US&";
     
        // // Append paypal return addresses
        // $querystring .= "return=".urlencode(stripslashes($return_url))."&";
        // $querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
        // $querystring .= "notify_url=".urlencode($notify_url);
     
        // // Append querystring with custom field
        // $querystring .= "user_id=craig.anderson350@bigpond.com";
     
        // // Redirect to paypal IPN
        // $reval = 'https://www.sandbox.paypal.com/cgi-bin/webscr'.$querystring;
        //  return redirect($reval);
    }
	public function add_to_cart(Request $request){

		if(isset($_POST)){
            
			$product_id = (int) $_POST['product_id'];
			$product_qty = (int) $_POST['quantity'];
			$product_price = (int) $_POST['price'];

            if(isset($_POST['color'])){
                $color = (int) $_POST['color'];
            }else{
                $color = 0;
            }
            
			

			$product_cart1 = $request->session()->get('product_cart');

			$product_cart_2 = array( 
	                array('product_id' => $product_id,
	                        'product_qty' => $product_qty,
	                        'product_price' => $product_price,
                            'color' => $color
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

	public function update_cart(Request $request){

		if(isset($_POST)){
			
			$product_quantity= (int) $_POST['product_quantity'];
			$product_id= (int) $_POST['product_id'];
			$product_price= (int) $_POST['product_price'];
            
            if(isset($_POST['color'])){
                $color = (int) $_POST['color'];
            }else{
                $color = 0;
            }
            
			$product_index= (int) $_POST['product_index'];

			$product_cart1 = $request->session()->get('product_cart');
			unset($product_cart1[$product_index]);

			$product_cart_2 = array( 
	                array('product_id' => $product_id,
	                        'product_qty' => $product_quantity,
	                        'product_price' => $product_price,
                            'color' => $color
	                ) 
	            );

			$result = array_merge($product_cart1, $product_cart_2);

			$set_array_value = array_values($result);
			$request->session()->set('product_cart', $set_array_value);

			return redirect('mycart');
		}
	}

	public function billingaddress(){
    	
    	$title = "Billing address | ";

    	return view('web::cart.billingaddress',[
                'title' => $title                
            ]);
    }

    public function customersavebilling(Request $request){

        $input = $request->all();
       

         DB::beginTransaction();
        try {
            
            $customer = Customer::create($input);
            DB::commit();
            $lastInsertedId= $customer->id;
            $request->session()->set('billing_id', $lastInsertedId);
            Session::flash('flash_message', 'Successfully added!');
            
        }catch (\Exception $e) {

            //If there are any exceptions, rollback the transaction`
            DB::rollback();
            Session::flash('flash_message_error', $e->getMessage());

            print_r($e->getMessage());
            exit();

            return redirect()->route('order-billing-address');   
        }
        
        return redirect()->route('order-delivery-detail');
    }


    public function deliverydetails(Request $request){

        $user_id = $request->session()->get('billing_id');        
        
        $billing_data = DB::table('customer')->where('id',$user_id)->first();
        $title = "Delivery details | ";

        return view('web::cart.deliverydetails',[
                'data' => $billing_data,
                'title' => $title
            ]);
    }

    public function savedeliverydetails(Request $request)
    {
        $input = $request->all();
        $user_id = $request->session()->get('billing_id');
        $input['user_id'] = $user_id;
         DB::beginTransaction();
        try {
            
            $delivery = Deliverydetails::create($input);
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
        
    }

    public function orderconfirm(Request $request){

        $title ="mycart | ";

        $product_cart = $request->session()->get('product_cart');
        
        $user_id = $request->session()->get('billing_id');
        $deliver_id = $request->session()->get('deliver_id');

        $user_data = DB::table('customer')->where('id',$user_id)->first();
        $delivery_data = DB::table('deliverydetails')->where('id',$deliver_id)->orderBy('id', 'desc')->first();

        return view('web::cart.finalcart',[
                'title' => $title,
                'product_cart_r' => $product_cart,
                'user_data' => $user_data,
                'delivery_data' => $delivery_data
            ]);
    }

    public function thankyou(Request $request){

        $title = 'Thank you';

        
        

        $to_email = 'mithun.cse521@gmail.com';
        $to_name = 'Mithun';
        $subject = "Order";
        $body = "Product";

        try{
            SendMailer::send_mail_by_php_mailer($to_email, $to_name, $subject, $body);

            echo 'hello';
            exit();
        }catch(Exception $e){
            print_r($e->getMessage());
        }
        

        return View('web::cart.thankyou',[
                'title' => $title
            ]);
    }

    public function saveorder(Request $request){

        $product_cart_r = $request->session()->get('product_cart');
        
        $user_id = $request->session()->get('billing_id');
        $deliver_id = $request->session()->get('deliver_id');

        DB::beginTransaction();
        try {

            $invoice_number = DB::table('order_overhead')->orderBy('id','desc')->first();;

            if(empty($invoice_number)){
                $invoice_number = 1;
            }else{
                $invoice_number = $invoice_number->id +1;
            }

            $modal = new Orderoverhead();

            $modal->invoice_id = 'INV-'.$invoice_number;
            $modal->user_id = $user_id;
            $modal->status ='open';

            $modal->save();

            foreach($product_cart_r as $product_cart){

                $deliver_modal = new Orderdetails();

                $deliver_modal->order_head_id =$modal->id;
                $deliver_modal->product_id =$product_cart['product_id'];
                $deliver_modal->qty = $product_cart['product_qty'];
                $deliver_modal->price = $product_cart['product_price'];
                $deliver_modal->product_variation_id = $product_cart['color'];
                $deliver_modal->status= 0;

                $deliver_modal->save();

                $product_remove =  Product::where('id',$product_cart['product_id'])->first();

                $product_remove->stock_unit_quantity = $product_remove->stock_unit_quantity - $product_cart['product_qty'];

                $product_remove->save();
            }
            
             

            DB::commit();

            $invoice_id = $modal->invoice_id;

            $user_data = DB::table('customer')->where('id',$user_id)->first();
            $delivery_data = DB::table('deliverydetails')->where('id',$deliver_id)->orderBy('id', 'desc')->first();

            $email = $user_data->email;

            // Mail::send('web::cart.mail_template', array('user_data' =>$user_data,'delivery_data'=>$delivery_data,'product_cart_r' => $product_cart_r),
            // function($message) use ($email,$invoice_id)
            // {
            //     $message->from('offthewallframing@gmail.com', 'Purchase product | OFF THE WALL');
            //     $message->to($email);
            //     $message->cc('offthewallframing@gmail.com', 'Purchase product | OFF THE WALL');
            //     // $message->replyTo('tanintjt.1990@gmail.com','User Signup Request');
            //     $message->subject('Your Order No is ' .$invoice_id );
            // });

            $ajax_response_data = array(
                'status' => "1",
                'message' => "22"
            );
            echo json_encode($ajax_response_data);
            exit;

        }catch (\Exception $e) {
            //If there are any exceptions, rollback the transaction`
            DB::rollback();
            print_r($e->getMessage());
            Session::flash('flash_message_error', $e->getMessage());
        }


       
    }
	
}