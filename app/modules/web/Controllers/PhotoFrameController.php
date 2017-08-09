<?php
namespace App\Modules\Web\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ImageSize;
use App\FrameCategory;
use App\Mat;
use App\GlassBacking;
use App\Printing;
use App\Article;
use App\CentralSettings;

class PhotoFrameController extends Controller{

	public function photo_frame(){

		$title = "Photo Frame";

		$data = ImageSize::where('status','active')->orderBy('sort_order', 'ASC')->get();

		$frame_category = FrameCategory::where('status','active')->orderBy('sort_order','ASC')->get();

		$mat_data = Mat::where('status','active')->get();

		$glass_backing_data = GlassBacking::where('status','active')->get();

		$printing_data = Printing::where('status','active')->get();

		$product_description = Article::where('status','active')->where('slug','product-description')->first();

		$how_to_order = Article::where('status','active')->where('slug','how-to-order')->first();

		$shipping_rule = Article::where('status','active')->where('slug','shipping-returns')->first();

		$discounts_value = CentralSettings::where('id','2')->first();

        return view('web::photo_frame.main',[
                'title' => $title,
                'data'  => $data,
                'frame_category' => $frame_category,
                'mat_data' => $mat_data,
                'glass_backing_data' => $glass_backing_data,
                'printing_data' => $printing_data,
                'product_description' => $product_description,
                'how_to_order' => $how_to_order,
                'shipping_rule' => $shipping_rule,
                'discounts_value' => $discounts_value
            ]);

	}

	public function add_to_cart(Request $request){

		if(isset($_POST)){
			$request->session()->set('photo_frame_cart', $_POST);
		}
		
	}

	public function canvas_print(){

		$title = 'Canvas Print';

		return view('web::photo_frame.canvas_print.main',[
                'title' => $title,
            ]); 
	}

	public function plain_mirror(){

		$title = 'Plain Mirror';

		return view('web::photo_frame.plain_mirror.main',[
                'title' => $title,
            ]); 
	}

	public function plain_mirror_frame_it(){

		$title = 'Plain Mirror';

		return view('web::photo_frame.plain_mirror.main_frame_it',[
                'title' => $title,
            ]); 

	}
}