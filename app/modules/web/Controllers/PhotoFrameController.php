<?php
namespace App\Modules\Web\Controllers;

use App\Http\Controllers\Controller;
use App\ImageSize;
use App\FrameCategory;
use App\Mat;
use App\GlassBacking;
use App\Printing;

class PhotoFrameController extends Controller{

	public function photo_frame(){

		$title = "Photo Frame";

		$data = ImageSize::where('status','active')->orderBy('sort_order', 'ASC')->get();

		$frame_category = FrameCategory::where('status','active')->orderBy('sort_order','ASC')->get();

		$mat_data = Mat::where('status','active')->get();

		$glass_backing_data = GlassBacking::where('status','active')->get();

		$printing_data = Printing::where('status','active')->get();

        return view('web::photo_frame.main',[
                'title' => $title,
                'data'  => $data,
                'frame_category' => $frame_category,
                'mat_data' => $mat_data,
                'glass_backing_data' => $glass_backing_data,
                'printing_data' => $printing_data
            ]);

	}

}