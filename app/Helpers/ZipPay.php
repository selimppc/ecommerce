<?php
/**
 * Created by PhpStorm.
 * User: selimreza
 * Date: 6/17/16
 * Time: 2:36 PM
 */

namespace App\Helpers;

use App\Helpers\TntEnquiry;
use App\Product;
use DOMDocument;
use DateTimeZone;
use DateTime;
use zipMoney;
use zipMoney\Request\Version;
use Illuminate\Support\Facades\DB;


#use Faker\Provider\DateTime;

class ZipPay
{
    /**
     * @param $invoice_number
     * @param $order_head
     * @param $order_detail
     * @param $customer_data
     * @param $delivery_data
     * @throws zipMoney\Exception
     */
    public static function call_to_server($invoice_number, $order_head, $order_detail, $customer_data, $delivery_data)
    {

        /*
        SANDBOX
            Merchant ID: 3075
            API Signature: TRjrjwZSprkucEtpL9BNOZPpkjydDIAk0Rlh7iYYbc0=
            Unique Id: daef00bf-536f-41b2-9bc7-2f1a47fc1742
         */

        /*
         *  Merchant ID: 1485
            API Key: 3t50JGRyQZeg7X3/00emLUvZYVp4BRLq/j8ty3256ec=
            Public Key: 6cbda058-c152-489e-bc0b-c34875f2f39d
         */


        #zipMoney\Configuration::$merchant_id  = 3075; //sandbox;
        zipMoney\Configuration::$merchant_id  = 1485; //production;

        #zipMoney\Configuration::$merchant_key = 'TRjrjwZSprkucEtpL9BNOZPpkjydDIAk0Rlh7iYYbc0='; //sandbox
        zipMoney\Configuration::$merchant_key = '3t50JGRyQZeg7X3/00emLUvZYVp4BRLq/j8ty3256ec='; // production

        #zipMoney\Configuration::$environment  = 'sandbox'; //sandbox;
        zipMoney\Configuration::$environment  = 'production'; //production;


        # Initialize the checkout
        $checkout = new \zipMoney\Api\Checkout();

        $checkout->request->charge = true;
        $checkout->request->currency_code = "AUD";
        $checkout->request->txn_id = false;
        $checkout->request->order_id =  $invoice_number; //$this->_current_order_id;
        $checkout->request->in_store = false;

        $checkout->request->cart_url    = "http://asimstoys.com.au/mycart";
        $checkout->request->success_url = "http://asimstoys.com.au/redirect_e_way_d/".$invoice_number."/".$order_head->net_amount."/".$customer_data->id ;
        //"{{route('redirect_e_way_d', [$invoice_number, $order_head->net_amount, $customer_data->id])}}";
        $checkout->request->cancel_url  = "http://asimstoys.com.au/redirect_e_way_d/zip-pay-cancel/".$invoice_number;
        $checkout->request->error_url   = "http://asimstoys.com.au/redirect_e_way_d/zip-pay-error/".$invoice_number;
        $checkout->request->refer_url   = "http://asimstoys.com.au/redirect_e_way_d/zip-pay-refer/".$invoice_number;
        $checkout->request->decline_url = "http://asimstoys.com.au/redirect_e_way_d/zip-pay-decline/".$invoice_number;

        // Order Info
        $order = new \zipMoney\Request\Order;
        $order->id = $invoice_number or null;
        $order->tax = 0;
        $order->shipping_tax = 0;
        $order->shipping_value = 0;
        $order->total = $order_head->net_amount + $order->shipping_value;

        // Order Item 1
        foreach ($order_detail as  $value)
        {

            $order_item = new \zipMoney\Request\OrderItem;
            $product = $customer_data = DB::table('product')->where('id',$value->product_id)->first();
            $order_item->id = $value->product_id;
            $order_item->sku  = $product->slug;
            $order_item->name = $product->title;
            $order_item->price =  $value->price;
            $order_item->quantity = $value->qty;
            $order_item->image_url = 'http://asimstoys.com.au/'.$product->image;

            $order->detail[] = $order_item;
        }


        $checkout->request->order = $order;

        // Billing Address
        $billingAddress  = new \zipMoney\Request\Address;


        $billingAddress->first_name = isset($customer_data->first_name)?$customer_data->first_name : null;
        $billingAddress->last_name = isset($customer_data->first_name)?$customer_data->first_name : null;
        $billingAddress->line1 = isset($customer_data->first_name)?$customer_data->first_name : null;
        $billingAddress->line2 = isset($customer_data->suburb)?$customer_data->suburb : null;
        $billingAddress->country = isset($customer_data->country)?$customer_data->country : null;
        $billingAddress->zip = isset($customer_data->postcode)?$customer_data->postcode : null;
        $billingAddress->city = isset($customer_data->state)?$customer_data->state : null;
        $billingAddress->state = isset($customer_data->state)?$customer_data->state : null;

        $checkout->request->billing_address  = $billingAddress;

        // Shipping Address
        $shippingAddress = new \zipMoney\Request\Address;

        $shippingAddress->first_name = isset($delivery_data->first_name)?$delivery_data->first_name : null;
        $shippingAddress->last_name = isset($delivery_data->first_name)?$delivery_data->first_name:null;
        $shippingAddress->line1 = isset($delivery_data->first_name)? $delivery_data->first_name : null;
        $shippingAddress->line2 = isset($delivery_data->suburb)?$delivery_data->suburb : null;
        $shippingAddress->country = isset($delivery_data->country ) ? $delivery_data->country : null;
        $shippingAddress->zip = isset($delivery_data->postcode) ?$delivery_data->postcode : null;
        $shippingAddress->city = isset($delivery_data->state) ?$delivery_data->state : null;
        $shippingAddress->state = isset($delivery_data->state) ? $delivery_data->state : null;

        $checkout->request->shipping_address  = $shippingAddress;


        // Consumer Info
        $consumer  = new \zipMoney\Request\Consumer;

        $consumer->first_name = isset($delivery_data->first_name)?$delivery_data->first_name:null;
        $consumer->last_name = isset($delivery_data->last_name)?$delivery_data->last_name:null;
        $consumer->phone = isset($delivery_data->telephone)?$delivery_data->telephone:null;
        $consumer->email = isset($delivery_data->email)?$delivery_data->email:null;
        $consumer->gender = null;
        $consumer->dob = null;
        $consumer->title = "Mr/Mrs";

        $checkout->request->consumer  = $consumer;
        $checkout->request->version = new Version();
        $checkout->request->version->platform = "php";
        

        try{
            $response = $checkout->process();

            /*echo "<pre>";
            print_r($response);

            print "\n";
            print "\n";
            print "Please go back and use another payment";
            print "\n";

            exit("Status : Declined ! Please try later !");*/
            

            if($response->isSuccess())
            {
                $arr_response = @$response->toArray();
                $url = @$arr_response['redirect_url'];

                //Do Something
                header('Location: '.$url);

                exit();

                #$result = 'Payment Success!';
            } else {
                //Handle Error
                $result = 'Invalid Request. Please try again !';
            }

        } catch (Exception $e){

            echo "<pre>";
            print_r($response);

            print "\n";
            print "\n";
            print "Please go back and use another payment";
            print "\n";

            exit("Status : Declined ! Please try later !");

            // Handle Error
            $result = 'Oops! Something went wrong. Please try again !';
        }

        return $result;


    }

}