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

Route::any('about-us',[
	'as' => 'about-us',
	'uses' => 'WwwController@about'
]);

Route::any('terms-and-conditions',[
	'as' => 'terms-and-conditions',
	'uses' => 'WwwController@termscondition'
]);

Route::any('privacy-security',[
	'as' => 'privacy-security',
	'uses' => 'WwwController@privacy'
]);

Route::any('contact-us',[
	'as' => 'contact-us',
	'uses' => 'WwwController@contact'
]);

Route::any('delivery-installation',[
	'as' => 'delivery-installation',
	'uses' => 'WwwController@delivery'
]);

Route::any('wholesale-customers',[
	'as' => 'wholesale-customers',
	'uses' => 'WwwController@wholesell'
]);

Route::any('splashbacks',[
	'as' => 'splashbacks',
	'uses' => 'WwwController@splashbacks'
]);

Route::any('mycart',[
		'as' => 'mycart',
		'uses' => 'CartController@mycart'
	]);

Route::any('order/update_cart',[
		'as' => 'update_cart',
		'uses' => 'OrderController@update_cart'
	]);

Route::any('order/remove_cart',[
		'as' => 'remove_cart',
		'uses' => 'OrderController@remove_cart'
	]);

Route::post('order/add_to_cart',[
		'as' => 'order-add_to_cart',
		'uses' => 'OrderController@add_to_cart'
	]);

Route::any("order/billingaddress", [
    "as"   => "order-billing-address",
    "uses" => "OrderController@billingaddress"
]);

Route::any("order/customerbillingdetail", [
    "as"   => "customer-billing-detail",
    "uses" => "OrderController@customersavebilling"
]);

Route::any("order/deliverydetails", [
    "as"   => "order-delivery-detail",
    "uses" => "OrderController@deliverydetails"
]);

Route::any("order/customerdeliverydetails", [
    "as"   => "customer-delivery-detail",
    "uses" => "OrderController@savedeliverydetails"
]);

Route::any("order/customerdeliverydetails", [
    "as"   => "customer-delivery-detail",
    "uses" => "OrderController@savedeliverydetails"
]);

Route::any('order/confirm',[
		'as' => 'order-check-order',
		'uses' => 'OrderController@orderconfirm'
	]);


Route::any('customer-reviews',[
		'as' => 'customer-reviews',
		'uses' => 'CustomerreviewsController@customerreviews'
	]);

Route::any('customerreviews-store',[
		'as' => 'customerreviews-store',
		'uses' => 'CustomerreviewsController@customerreviewsstore'
	]);

Route::any('{main_slug}/{sub_slug}',[
		'as' => 'product_category',
		'uses' => 'ProductCategoryController@couple'
]);

Route::any('{product_slug}',[
		'as' => 'product',
		'uses' => 'ProductController@index'
	]);

});

