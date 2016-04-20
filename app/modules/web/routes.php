<?php
/**
 * Created by PhpStorm.
 * User: selim
 * Date: 12/8/2015
 * Time: 5:54 PM
 */

Route::group(array('modules'=>'Web', 'namespace' => 'App\Modules\Web\Controllers'), function() {
    //Your routes belong to this module.

/*Route::any('admin', [
    'as' => 'admin',
    'uses' => 'HomeController@user_login'
]);*/

Route::any('web', [
    'as' => 'web',
    'uses' => 'WebController@web_index'
]);



Route::any('/', [
    'as' => 'home-page',
    'uses' => 'WwwController@home_page'
]);

Route::any('order/update_cart',[
		'as' => 'update_cart',
		'uses' => 'OrderController@update_cart'
	]);

Route::any('order/remove_cart',[
		'as' => 'remove_cart',
		'uses' => 'OrderController@remove_cart'
	]);

Route::any('special', [
    'as' => 'special',
    'uses' => 'WwwController@special'
]);

Route::any('terms-condition',[
		'as' => 'terms-condition',
		'uses' => 'WwwController@termscondition'
	]);

Route::any('lay-by-instruction',[
		'as' => 'lay-by-instruction',
		'uses' => 'WwwController@laybyinstruction'
	]);

Route::any('warranty',[
		'as' => 'warranty',
		'uses' => 'WwwController@warranty'
	]);

Route::any('faq',[
		'as' => 'faq',
		'uses' => 'WwwController@faq'
	]);

Route::any('contact',[
		'as' => 'contact',
		'uses' => 'WwwController@contact'
	]);

Route::any('customerlogin',[
		'as' => 'customerlogin',
		'uses' => 'WwwController@login'
	]);

Route::any('customerlogout',[
		'as' => 'customerlogout',
		'uses' => 'WwwController@logout'
	]);

Route::any('register',[
		'as' => 'register',
		'uses' => 'WwwController@register'
	]);


Route::any('mycart',[
		'as' => 'mycart',
		'uses' => 'CartController@mycart'
	]);


Route::any('remove_cart',[
		'as' => 'remove_cart',
		'uses' => 'CartController@remove_cart'
	]);

/*---------Shajjad Start---------------*/

Route::any('myaccount',[
	'as' => 'myaccount',
	'uses' => 'AccountsController@myaccount'
]);

/*---------Shajjad End---------------*/


	Route::any('order-checkout',[
		'as' => 'order-checkout',
		'uses' => 'OrderController@ordercheckout'
	]);

Route::any('order/confirm',[
		'as' => 'order-check-order',
		'uses' => 'OrderController@orderconfirm'
	]);

Route::any("customer-registration", [
    "as"   => "customer-registration",
    "uses" => "OrderController@customerregister"
]);


Route::any("order/customer-login", [
    "as"   => "customer-login",
    "uses" => "OrderController@customerlogin"
]);


Route::any("order/customerdeliverydetails", [
    "as"   => "customer-delivery-detail",
    "uses" => "OrderController@savedeliverydetails"
]);

Route::any("order/customerbillingdetail", [
    "as"   => "customer-billing-detail",
    "uses" => "OrderController@customersavebilling"
]);

Route::any("order/billingaddress", [
    "as"   => "order-billing-address",
    "uses" => "OrderController@billingaddress"
]);

Route::any("order/deliverydetails", [
    "as"   => "order-delivery-detail",
    "uses" => "OrderController@deliverydetails"
]);


Route::post('order/add_to_cart',[
		'as' => 'order-add_to_cart',
		'uses' => 'OrderController@add_to_cart'
	]);

Route::post('order/add_to_cart_update',[
		'as' => 'add_to_cart_update',
		'uses' => 'OrderController@add_to_cart_update'
	]);

Route::any('pre-order',[
		'as' => 'pre-order',
		'uses' => 'ProductCategoryController@preorder'
	]);

Route::any('lay-by',[
		'as' => 'lay-by',
		'uses' => 'ProductCategoryController@layby'
	]);

Route::any('{product_slug}',[
		'as' => 'product',
		'uses' => 'ProductController@index'
	]);

/*---------Shajjad Start---------------*/

Route::any("order/paynow", [
	"as"   => "pay-now",
	"uses" => "OrderController@paynow"
]);








/*---------Shajjad End---------------*/


Route::any('{main_slug}/{sub_slug}',[
		'as' => 'product_category',
		'uses' => 'ProductCategoryController@couple'
	]);

Route::any('{main_slug}/{sub_slug}/{type}',[
		'as' => 'product_category',
		'uses' => 'ProductCategoryController@index'
	]);



});

