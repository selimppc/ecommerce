<?php

namespace App\Modules\Web\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

use App\ProductGroup;
use DB;


class ProductController extends Controller
{

	public function index($product_slug){

		$product = DB::table('product')->where('slug',$product_slug)->first();
		$productgroup_data = ProductGroup::where('status','active')->orderby('sortorder','asc')->get();

		$related_product_r = DB::table('product')->where('product_subgroup_id',$product->product_subgroup_id)->whereNotIn('id',[$product->id])->get();

		$product_single_gallery = DB::table('gal_image')->where('product_id',$product->id)->first();

		$product_gallery_all = DB::table('gal_image')->where('product_id',$product->id)->get();

		$product_variation = DB::table('product_variation')->where('product_id',$product->id)->get();

		$title =$product->title ." | Asim's Toy";

			return view('web::product.details',[
                'title' => $title,
                'product' => $product,
                'productgroup_data' => $productgroup_data,
                'product_single_gallery' => $product_single_gallery,
                'product_gallery_all' => $product_gallery_all,
                'related_product_r' => $related_product_r,
                'product_variation_r' => $product_variation
            ]);

	}
}