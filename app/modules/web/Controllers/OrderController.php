<?php

namespace App\Modules\Web\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\ProductGroup;
use App\Customer;
use App\Deliverydetails;
use DB;
use Session;
use Input;

class OrderController extends Controller
{

	public function add_to_cart(Request $request){

		if(isset($_POST)){

			$product_id = (int) $_POST['product_id'];
			$product_qty = (int) $_POST['quantity'];
			$product_price = (int) $_POST['price'];
			

			$product_cart1 = $request->session()->get('product_cart');

			$product_cart_2 = array( 
	                array('product_id' => $product_id,
	                        'product_qty' => $product_qty,
	                        'product_price' => $product_price
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
			$product_index= (int) $_POST['product_index'];

			$product_cart1 = $request->session()->get('product_cart');
			unset($product_cart1[$product_index]);

			$product_cart_2 = array( 
	                array('product_id' => $product_id,
	                        'product_qty' => $product_quantity,
	                        'product_price' => $product_price
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
	
}