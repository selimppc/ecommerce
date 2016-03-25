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

Route::any('{main_slug}/{sub_slug}',[
		'as' => 'product_category',
		'uses' => 'ProductCategoryController@couple'
]);

Route::any('{product_slug}',[
		'as' => 'product',
		'uses' => 'ProductController@index'
	]);

});

