<?php

namespace App\Modules\Web\Controllers;
use App\Customer;
use App\DeliveryDetails;
use App\OrderHead;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

use App\ProductGroup;
use DB;
use Session;
use App\OrderPaymentTransaction;


class AccountsController extends Controller
{

    public function myaccount(Request $request){

        if(Session::has('user_id')){

            $request->session()->set('redirect_value', '');
            $title ="My Accounts | Asim's Toy";

            $get_customer_data = DB::table('customer')->where('id',Session::get('user_id'))->first();

            /*$productgroup_data = ProductGroup::where('status','active')->orderby('sortorder','asc')->get();
            $get_order_history = DB::table('order_head')
                //->join('order_detail', 'order_head.id', '=', 'order_detail.order_head_id')
                ->where('order_head.user_id',Session::get('user_id'))
                ->where('order_head.invoice_type','eway')
                ->orderBy('order_head.id','desc')
                ->get();
             $get_layby_history = DB::table('order_head')
                //->join('order_detail', 'order_head.id', '=', 'order_detail.order_head_id')
                ->where('order_head.user_id',Session::get('user_id'))
                ->where('order_head.invoice_type','layby')
                ->orderBy('order_head.id','desc')
                ->get();
            $delivery_data = DB::table('delivery_details')->where('user_id',Session::get('user_id'))->orderBy('id','desc')->first(); */

            return view('web::accounts.accounts',[
                'title' => $title,
                #'productgroup_data' => $productgroup_data,
                'get_customer_data' => $get_customer_data,
                #'get_order_history' => $get_order_history,
                #'delivery_data' => $delivery_data,
                #'get_layby_history' => $get_layby_history
            ]);


        }else{
            $request->session()->set('redirect_value', 'myaccount');
            return redirect('customerlogin');

        }

        
    }

    public function order_summery_lists(Request $request){

        if(Session::has('user_id')){

            $request->session()->set('redirect_value', '');
            $title ="My Accounts | Asim's Toy";


            $productgroup_data = ProductGroup::where('status','active')->orderby('sortorder','asc')->get();
            $get_order_history = DB::table('order_head')
                //->join('order_detail', 'order_head.id', '=', 'order_detail.order_head_id')
                ->where('order_head.user_id',Session::get('user_id'))
                ->where('order_head.invoice_type','eway')
                ->orderBy('order_head.id','desc')
                ->get();

            return view('web::accounts.ordersummary',[
                'title' => $title,
                'productgroup_data' => $productgroup_data,
                'get_order_history' => $get_order_history,
            ]);


        }else{
            $request->session()->set('redirect_value', 'myaccount');
            return redirect('customerlogin');

        }


    }


    public function lay_by_order_lists(Request $request){

        if(Session::has('user_id')){

            $request->session()->set('redirect_value', '');
            $title ="My Accounts | Asim's Toy";


            $productgroup_data = ProductGroup::where('status','active')->orderby('sortorder','asc')->get();

            $get_layby_history = DB::table('order_head')
                //->join('order_detail', 'order_head.id', '=', 'order_detail.order_head_id')
                ->where('order_head.user_id',Session::get('user_id'))
                ->where('order_head.invoice_type','layby')
                ->orderBy('order_head.id','desc')
                ->get();

            return view('web::accounts.layby',[
                'title' => $title,
                'productgroup_data' => $productgroup_data,
                'get_layby_history' => $get_layby_history
            ]);


        }else{
            $request->session()->set('redirect_value', 'myaccount');
            return redirect('customerlogin');

        }


    }


    public function details_of_lay_by($order_head_id){


        $total_amount = DB::table('order_detail')
            ->select(DB::raw('SUM(price) as total_amount'))
            ->groupBy('order_head_id')
            ->where('order_head_id', $order_head_id)
            ->first();

        $paid_amount = DB::table('order_payment_transaction')
            ->select(DB::raw('SUM(amount) as paid_amount'))
            ->groupBy('order_head_id')
            ->where('order_head_id', $order_head_id)
            ->first();

        $due_amount = @$total_amount->total_amount - @$paid_amount->paid_amount;

        $order = OrderHead::with('relOrderDetail')->where('invoice_type', 'layby')->where('id', $order_head_id)->get();
        $order_pay_trn = OrderPaymentTransaction::where('order_head_id', $order_head_id)->get();

        $get_customer_data = Customer::where('id',Session::get('user_id'))->first();
        $delivery_data = DeliveryDetails::where('user_id',Session::get('user_id'))->orderBy('id','desc')->first();

        $title = 'Invoice Detail';

        return view('web::accounts.order_details',[
            'order' => $order,
            'order_pay_trn' => $order_pay_trn,
            'title' => $title,
            'get_customer_data' => $get_customer_data,
            'delivery_data' => $delivery_data,
            'total_amount'=>$total_amount,
            'paid_amount'=>$paid_amount,
            'due_amount'=>$due_amount,
            'order_head_id'=>$order_head_id,
        ]);


    }



    public function lay_by_pay_option($order_head_id){

        $order_data = OrderHead::where('id', $order_head_id)->first();
        $title = 'Invoice Detail';

        $customer_data = DB::table('customer')->where('id',Session::get('user_id'))->first();

        $total_amount = DB::table('order_detail')
            ->select(DB::raw('SUM(price) as total_amount'))
            ->groupBy('order_head_id')
            ->where('order_head_id', $order_head_id)
            ->first();

        $paid_amount = DB::table('order_payment_transaction')
            ->select(DB::raw('SUM(amount) as paid_amount'))
            ->groupBy('order_head_id')
            ->where('order_head_id', $order_head_id)
            ->first();

        $due_amount = @$total_amount->total_amount - @$paid_amount->paid_amount;

        return view('web::accounts.lay_by_pay_option',[
            'title' => $title,
            'order_data'=>$order_data,
            'total_amount'=>$total_amount,
            'paid_amount'=>$paid_amount,
            'due_amount'=>$due_amount,
            'customer_data'=>$customer_data,
        ]);


    }

    public function bank_partial_payment_submit(Request $request){

        $input_data = $request->all();

        try{
            $model = new OrderPaymentTransaction();
            $model->order_head_id = $input_data['order_head_id'];
            $model->customer_id = $input_data['customer_id'];
            $model->payment_type = $input_data['payment_type'];
            $model->amount = $input_data['amount'];
            $model->date = date('Y-m-d H:i:s');
            $model->transaction_no = $input_data['transaction_no'];
            $model->gateway_name = $input_data['gateway_name'];
            $model->gateway_address = $input_data['gateway_address'];
            $model->status = 'pending';

            $model = $model->save();
        }catch(\Exception $e){
            $model = $e->getMessage();
        }


        Session::flash('flash_message', "Successfully Added Lay-by Payment.");
        return redirect()->route('details_of_lay_by', $input_data['order_head_id']);
    }



    public function details_of_order_summery($order_head_id){

        $order = OrderHead::with('relOrderDetail')->where('invoice_type', 'eway')->where('id', $order_head_id)->get();

        $get_customer_data = Customer::where('id',Session::get('user_id'))->first();

        $delivery_data = DeliveryDetails::where('user_id',Session::get('user_id'))->orderBy('id','desc')->first();

        $title = 'Invoice Detail';

        return view('web::accounts.order_summery_details',[
            'order' => $order,
            'title' => $title,
            'get_customer_data' => $get_customer_data,
            'delivery_data' => $delivery_data,
            'order_head_id'=>$order_head_id,
        ]);


    }


}