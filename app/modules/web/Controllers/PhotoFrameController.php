<?php
namespace App\Modules\Web\Controllers;

use App\Http\Controllers\Controller;
use App\ImageSize;
use App\FrameCategory;

class PhotoFrameController extends Controller{

	public function photo_frame(){

		$title = "Photo Frame";

		$data = ImageSize::where('status','active')->orderBy('sort_order', 'ASC')->get();

		$frame_category = FrameCategory::where('status','active')->orderBy('sort_order','ASC')->get();

        return view('web::photo_frame.main',[
                'title' => $title,
                'data'  => $data,
                'frame_category' => $frame_category
            ]);

	}

}