<?php

namespace App\Modules\Web\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

use App\ProductGroup;
use DB;


class CartController extends Controller
{

	public function mycart(Request $request){

		$title ="mycart";

        $product_cart = $request->session()->get('product_cart');

        $photo_frame_cart = $request->session()->get('photo_frame_cart');


        #print_r($product_cart);
        print_r($photo_frame_cart);
        exit();

        return view('web::cart.cart1',[
                'title' => $title,
                'product_cart_r' => $product_cart,
                'photo_frame_cart' => $photo_frame_cart
            ]);
	}
}