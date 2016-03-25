<?php
/**
 * Created by PhpStorm.
 * User: sr
 * Date: 12/24/15
 * Time: 11:16 AM
 */

namespace App\Modules\Web\Controllers;

use App\Article;
use App\GalImage;
use App\Media;
use App\SliderImage;
use App\ProductGroup;
use App\Product;
use App\Team;
use App\Widget;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;

use Session;
use App\Menu;
use App\MenuType;
use DB;
use App\Events\Event;
use App\Events\MyWidgets;


class WwwController extends Controller
{
    public function home_page()
    {
    	$title = "Welcome to the";
    	$slider_data = SliderImage::where('cat_slider_id', 1)->get();
    	$featured_product_data = Product::where('is_featured','Yes')->where('status','active')->get();

    	$home_value = "off-the-wall";
    	$data = Article::where('slug', $home_value)->where('status', 'active')->first();

        return view('web::layout.home_page',[
        		'title' => $title,
        		'data' => $data,
        		'slider_data'=>$slider_data,
        		'featured_product_data' => $featured_product_data
        	]);
    }


    public function about(){
        $slug = 'about-us';

        $data = Article::where('slug',$slug)->first();

        $title =$data->title;

        return view('web::general.commonpage', [
            'title'=>$title,
            'data'=>$data
        ]);
    }

    public function contact(){
        $slug = 'contact-us';

        $data = Article::where('slug',$slug)->first();

        $title =$data->title;

        return view('web::general.commonpage', [
            'title'=>$title,
            'data'=>$data
        ]);
    }
    

     public function delivery(){
        $slug = 'delivery-installation';

        $data = Article::where('slug',$slug)->first();

        $title =$data->title;

        return view('web::general.commonpage', [
            'title'=>$title,
            'data'=>$data
        ]);
    }

     public function wholesell(){
        $slug = 'wholesale-customers';

        $data = Article::where('slug',$slug)->first();

        $title =$data->title;

        return view('web::general.commonpage', [
            'title'=>$title,
            'data'=>$data
        ]);
    }

     public function splashbacks(){
        $slug = 'splashbacks';

        $data = Article::where('slug',$slug)->first();

        $title =$data->title;

        return view('web::general.commonpage', [
            'title'=>$title,
            'data'=>$data
        ]);
    }


}