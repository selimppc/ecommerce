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
use App\Helpers\ImageResize;
use League\Flysystem\File;
use Illuminate\Support\Facades\Validator;

use Session;
use App\Menu;
use App\MenuType;
use DB;
use App\Events\Event;
use App\Events\MyWidgets;

use Input;


class WwwController extends Controller
{
    public function home_page()
    {
    	$title = "Welcome to the";
    	$slider_data = SliderImage::where('cat_slider_id', 1)->where('status','active')->get();
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

    public function termscondition(){
        $slug = 'terms-and-conditions';

        $data = Article::where('slug',$slug)->first();

        $title =$data->title;

        return view('web::general.commonpage', [
            'title'=>$title,
            'data'=>$data
        ]);
    }

    public function privacy(){
        $slug = 'privacy-security';

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

        return view('web::general.contact', [
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

    public function apps(){

        $title = "Applications";

        return view('web::general.application',[
                'title' => $title
            ]);
    }

    public function apps_photo_upload(){

        $title = "Applications photo upload";

        return view('web::general.photo_upload',[
                'title' => $title
            ]);

    }

    public function phototempstore(Request $request){

        $input = $request->all();
        $image=Input::file('image');

        if(count($image)>0){
            $file_type_required = 'png,jpeg,jpg';
            $destinationPath = 'web/temImages/';
            $uploadfolder = 'web/';
            if ( !file_exists($uploadfolder) ) {
                $oldmask = umask(0);  // helpful when used in linux server
                mkdir ($uploadfolder, 0777);
            }
            if ( !file_exists($destinationPath) ) {
                $oldmask = umask(0);  // helpful when used in linux server
                mkdir ($destinationPath, 0777);
            }

            $filename = md5(microtime() . $image->getClientOriginalName()) . "." . $image->getClientOriginalExtension();
            $upload_file = Input::file('image')->move($destinationPath, $filename);
            
            if($upload_file){
                $request->session()->set('apps_image', $filename);
                return redirect('apps/photo-edit');
            }else{
                 return redirect('apps/photo-upload');
            }
            
        }


    }




    public function photoedit(){

        $title = "Apps photo edit | ";

        return view('web::general.photo_edit',[
                'title' => $title
            ]);

    }

    public function customsize(){

        $title = "Apps custom size | ";

        return view('web::general.custom_size',[
                'title' => $title
            ]);
    }

    public function photoresize(Request $request){

        $data = $_POST['photo'];
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $data = base64_decode($data);

        $photo_name =  time().'.png';

        $destinationPath = 'web/photos/';
        $uploadfolder = 'web/';

        file_put_contents($destinationPath . $photo_name, $data);
        
        //$request->session()->set('modify_img',$photo_name);
        session_start();
        $_SESSION["modify_img"] = $photo_name;
       
        $ajax_response_data = array(
            'status' => "1"
        );
        echo json_encode($ajax_response_data);
        exit;
    }


    public function photoframe(){

        $title = "Photo Frame | ";

        return view('web::general.photoframe',[
                'title' => $title
            ]);
    }


}