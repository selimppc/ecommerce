<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Session;
use Input;

use App\Customer;
use App\DeliveryDetails;
use App\Orderoverhead;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrderPaymentController extends Controller{

	public function order_paid_index()
    {

        $pageTitle = "Order";

        $data = Orderoverhead::with('relCustomer')
            ->where('status', 'open')
            ->orderBy('order_overhead.id','desc')
            ->get();


        return view('order_payment.order_paid_index',['pageTitle' => $pageTitle,'data' => $data]);
    }

    public function order_paid_approved()
    {

        $pageTitle = "Order";

        $data = Orderoverhead::with('relCustomer')
            ->where('status', 'approved')
            ->orderBy('order_overhead.id','desc')
            ->get();


        return view('order_payment.order_paid_approved',['pageTitle' => $pageTitle,'data' => $data]);
    }

    public function order_paid_delivered()
    {

        $pageTitle = "Order";

        $data = Orderoverhead::with('relCustomer')
            ->where('status', 'delivered')
            ->orderBy('order_overhead.id','desc')
            ->get();


        return view('order_payment.order_paid_delivered',['pageTitle' => $pageTitle,'data' => $data]);
    }

     public function order_show($order_head_id){

        $order = Orderoverhead::with('relOrderDetail')->where('id', $order_head_id)->get();
       
        $customer_data = Customer::where('id',$order[0]->user_id)->first();

        $title = 'Invoice Detail';

        return view('order_payment.order_details',[
            'order_data' => $order,
            'title' => $title,         
            'order_head_id'=>$order_head_id,
            'customer_data' => $customer_data
        ]);


    }


     public function approve($id)
    {
       
        try {
            $model = Orderoverhead::where('id',$id)->first();
            $model->status = 'approved';
            if ($model->save()) {

              
                Session::flash('flash_message', " Successfully Saved.");
                return redirect()->back();
            }
        } catch(\Exception $e) {
            Session::flash('flash_message_error',$e->getMessage() );
            return redirect()->back();
        }
    }

    public function deliverd($id)
    {
       
        try {
            $model = Orderoverhead::where('id',$id)->first();
            $model->status = 'delivered';
            if ($model->save()) {

              
                Session::flash('flash_message', " Successfully Saved.");
                return redirect()->back();
            }
        } catch(\Exception $e) {
            Session::flash('flash_message_error',$e->getMessage() );
            return redirect()->back();
        }
    }

     public function cancel($id)
    {
       
        try {
            $model = Orderoverhead::where('id',$id)->first();
            $model->status = 'cancel';
            if ($model->save()) {

              
                Session::flash('flash_message', " Successfully Saved.");
                return redirect()->back();
            }
        } catch(\Exception $e) {
            Session::flash('flash_message_error',$e->getMessage() );
            return redirect()->back();
        }
    }

}