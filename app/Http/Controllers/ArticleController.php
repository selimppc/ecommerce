<?php

namespace App\Http\Controllers;

use App\Article;
use App\Articlesub;
use App\Pageparent;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use League\Flysystem\File;
use Session;
use Input;
use App\Http\Controllers\Controller;
use App\Helpers\ImageResize;
use App\Helpers\PostSearch;

class ArticleController extends Controller
{

    /*
     * POST REQUEST
     */
    protected function isPostRequest()
    {
        return Input::server("REQUEST_METHOD") == "POST";
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = "Article/Page";

        if($this->isPostRequest()){
            $q = Input::get('search_term');
            /*$q = array(
                'title' =>Input::get('title_filters')
            );
            $model = new Article();
            $data = PostSearch::search($q, $model);*/
            $data = Article::where('title', 'LIKE', "%".$q."%")->paginate(20);
        }else{
            $data = Article::orderBy('id', 'DESC')->paginate(20);
        }

        return view('article.index', ['data' => $data, 'pageTitle'=> $pageTitle]);
    }

    public function add_index()
    {
        $pageTitle = "Article/Page";
        $parent_id = Pageparent::lists('title','id');
        return view('article.add', [
                'pageTitle'=> $pageTitle,
                'type' => $parent_id
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\ArticleRequest $request)
    {
        $input = $request->all();


        $image = Input::file('featured_image');
        $image_2 = Input::file('featured_image_2');

        $tittle = Input::get('title');
        $slug = str_slug($tittle);
        $input['slug'] = $slug;

        if(count($image)>0 || count($image_2)>0){
            $file_type_required = 'png,jpeg,jpg';
            $destinationPath = 'uploads/featured_image/';
            $uploadfolder = 'uploads/';

            if ( !file_exists($uploadfolder) ) {
                $oldmask = umask(0);  // helpful when used in linux server
                mkdir ($uploadfolder, 0777);
            }
            if ( !file_exists($destinationPath) ) {
                $oldmask = umask(0);  // helpful when used in linux server
                mkdir ($destinationPath, 0777);
            }

            if($image)
                $file_name = ArticleController::image_upload($image,$file_type_required,$destinationPath);
            if($image_2)
                $file_name_2 = ArticleController::image_upload($image_2,$file_type_required,$destinationPath);

            if(isset($file_name) != ''){
                $input['featured_image'] = $file_name[0];
                $input['thumbnail'] = $file_name[1];
            }
            if(isset($file_name_2) != ''){
                $input['featured_image_2'] = $file_name_2[0];
                $input['thumbnail_2'] = $file_name_2[1];
            }
            /*else{
                Session::flash('flash_message_error', 'Some thing error in image file type! Please Try again');
                return redirect()->back();
            }*/
        }

        DB::beginTransaction();
        try {
            $article_data = Article::create($input);

            for($i=0;$i<count(Input::get('posttitle'));$i++){

                 $article_id = $article_data->id;
                 $posttitle = $input['posttitle'][$i];
                 $postdescription = $input['postdescription'][$i];
                
                $article_sub_array = ['article_id' => $article_id,'title'=>$posttitle,'desc' => $postdescription];
                Articlesub::create($article_sub_array);
            }

            DB::commit();
            Session::flash('flash_message', 'Successfully added!');
        }catch (\Exception $e) {
            //If there are any exceptions, rollback the transaction`
            DB::rollback();
            Session::flash('flash_message_error', $e->getMessage());
        }
        return redirect()->route('article-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $pageTitle = 'Show the detail';
        $data = Article::where('slug',$slug)->first();
        return view('article.view', ['data' => $data, 'pageTitle'=> $pageTitle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data = Article::where('slug',$slug)->first();
        $parent_id = Pageparent::lists('title','id');

        $sub_page_id = Article::where('id',$data->sub_page_id)->first();

        return view('article.update', [
            'data' => $data,
            'type' => $parent_id,
            'sub_page_id' => $sub_page_id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ArticleRequest $request, $slug)
    {
        $model = Article::where('slug',$slug)->first();
        $input = $request->all();
        $image=Input::file('featured_image');
        $image_2 = Input::file('featured_image_2');

        $tittle = Input::get('title');
        $slug = str_slug($tittle);
        $input['slug'] = $slug;

            if(count($image)>0 || count($image_2)>0) {
                $file_type_required = 'png,jpeg,jpg';
                $destinationPath = 'uploads/featured_image/';

                $uploadfolder = 'uploads/';

                if ( !file_exists($uploadfolder) ) {
                    $oldmask = umask(0);  // helpful when used in linux server
                    mkdir ($uploadfolder, 0777);
                }
                if ( !file_exists($destinationPath) ) {
                    $oldmask = umask(0);  // helpful when used in linux server
                    mkdir ($destinationPath, 0777);
                }

                if($image){
                    $file_name = ArticleController::image_upload($image, $file_type_required, $destinationPath);
                }
                if($image_2){
                    $file_name_2 = ArticleController::image_upload($image_2,$file_type_required,$destinationPath);
                }

                if (isset($file_name) != '') {

                    //unlink(public_path()."/".$model->featured_image);
                    //unlink(public_path()."/".$model->thumbnail);

                    $input['featured_image'] = $file_name[0];
                    $input['thumbnail'] = $file_name[1];
                }
                if(isset($file_name_2) != ''){
                    //unlink(public_path()."/".$model->featured_image_2);
                    //unlink(public_path()."/".$model->thumbnail);
                    $input['featured_image_2'] = $file_name_2[0];
                    $input['thumbnail_2'] = $file_name_2[1];
                }
            }
            DB::beginTransaction();
            try {
                $model->update($input);
                DB::commit();
                Session::flash('flash_message', "Successfully Updated");
            }
            catch ( Exception $e ){
                //If there are any exceptions, rollback the transaction
                DB::rollback();
                Session::flash('flash_message_error', $e->getMessage());
            }
        return redirect()->route('article-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($slug)
    {
        try {
            $model = Article::where('slug',$slug)->first();
            if ($model->delete()) {
                if($model->featured_image != null){
                    unlink($model->featured_image);
                    unlink($model->featured_imag2);
                    unlink($model->thumbnail);
                }
                Session::flash('flash_message', " Successfully Deleted.");
                return redirect()->back();
            }
        } catch(\Exception $e) {
            Session::flash('flash_message_error',$e->getMessage() );
            return redirect()->back();
        }
    }

    public function image_show($slug){
        $pageTitle = 'Image';
        $image = Article::where('slug','=',$slug)->get();

        return view('article.view_image', [
            'pageTitle'=> $pageTitle, 'image'=>$image
        ]);
    }

    public function image_upload($image,$file_type_required,$destinationPath){
        if ($image != '') {

            $img_name = ($_FILES['featured_image']['name']);
            $random_number = rand(111, 999);

            $thumb_name = 'thumb_200x200_'.$random_number.'_'.$img_name;

            $newWidth=200;
            $targetFile=$destinationPath.$thumb_name;
            $originalFile=$image;

            $resizedImages 	= ImageResize::resize($newWidth, $targetFile,$originalFile);

            $thumb_image_destination=$destinationPath;
            $thumb_image_name=$thumb_name;

            //$rules = array('image' => 'required|mimes:png,jpeg,jpg');
            $rules = array('image' => 'required|mimes:'.$file_type_required);
            $validator = Validator::make(array('image' => $image), $rules);
            if ($validator->passes()) {
                // Files destination
                //$destinationPath = 'uploads/slider_image/';
                // Create folders if they don't exist
                if (!file_exists($destinationPath)) {
                    mkdir($destinationPath, 0777, true);
                }
                $image_original_name = $image->getClientOriginalName();
                $image_name = rand(11111, 99999) . $image_original_name;
                $upload_success = $image->move($destinationPath, $image_name);

                $file=array($destinationPath . $image_name, $thumb_image_destination.$thumb_image_name);

                if ($upload_success) {
                    return $file_name = $file;
                }
                else{
                    return $file_name = '';
                }
            }
            else{
                return $file_name = '';
            }
        }
    }

    public function add_subpage_ajax(){

         $input_data = Input::all();
         $type = $input_data['type'];

         $subpage_data = DB::table('article')->where('type',$type)->get();

         $select = '';
         $select.='<option value="">Select Subpage</option>';
         foreach($subpage_data as $subpage):
            $select.='<option value="'.$subpage->id.'">'.$subpage->title.'</option>';
         endforeach;

         $ajax_response_data = array(
            'status' => "1",
            'message' => "$select"
        );
        echo json_encode($ajax_response_data);
        exit;
    }
}
