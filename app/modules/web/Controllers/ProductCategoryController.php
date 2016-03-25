<?php

namespace App\Modules\Web\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

use App\ProductGroup;
use DB;


class ProductCategoryController extends Controller
{

	public function couple($main_slug,$sub_slug){

		$product_group = DB::table('groups')
							->where('slug',$main_slug)
							->first();

		if(!empty($product_group)){

			$product_subgroup = DB::table('product_subgroup')
							->where('slug',$sub_slug)
							->where('product_group_id',$product_group->id)
							->first();

				$productdata = DB::table('product')
								->where('product_group_id',$product_group->id)
								->where('product_subgroup_id',$product_subgroup->id)
								->where('preorder','0')
								->orderBy('sort_order','asc')
								->get();
					
				$title =$product_subgroup->title . ' | ';

				return view('web::productcategory.all',[
		            'title' => $title,
		            'productdata' => $productdata,
		            'product_subgroup' => $product_subgroup            
		        ]);


		}else{

			$productcategory = DB::table('article')->where('slug',$sub_slug)->first();
			$title =$productcategory->title . ' | ';

			$product_content = DB::table('article')->where('sub_page_id',$productcategory->id)->get();

			return view('web::productcategory.all_pages',[
	            'title' => $title,
	            'productcategory' => $productcategory,
	            'product_content' => $product_content          
	        ]);
		}
		

	}
	
}