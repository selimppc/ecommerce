<?php
namespace App\Modules\Web\Controllers;

use App\Http\Controllers\Controller;
use App\ImageSize;

class PhotoFrameController extends Controller{

	public function photo_frame(){

		$title = "Photo Frame";

		$data = ImageSize::orderBy('sort_order', 'ASC')->get();

        return view('web::photo_frame.main',[
                'title' => $title,
                'data'  => $data
            ]);

	}

}