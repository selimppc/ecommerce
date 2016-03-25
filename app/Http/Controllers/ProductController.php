<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductGroup;
use App\ProductSubgroups;
use App\ProductCategory;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Helpers\ImageResize;
use Illuminate\Support\Facades\Validator;

use DB;
use Session;
use Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pageTitle = "Product";
       $product_group_id = ProductGroup::lists('title','id');
       $cat_product_id = ProductCategory::lists('title','id');

       $data = Product::orderBy('id', 'DESC')->paginate(20);
        return view('product.index',[
                'pageTitle' => $pageTitle,
                'cat_product_id' => $cat_product_id,
                'data' => $data,
                'product_group_id' => $product_group_id
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

    


    public function store(Requests\ProductRequest $request)
    {
       $input = $request->all();
       $tittle = Input::get('title');
       $slug = str_slug($tittle);
       $input['slug'] = $slug;

      
        $image=Input::file('image');
        if(count($image)>0) {
            $file_type_required = 'png,jpeg,jpg';
            $destinationPath = 'uploads/product_image/';

            $uploadfolder = 'uploads/';

            if ( !file_exists($uploadfolder) ) {
                $oldmask = umask(0);  // helpful when used in linux server
                mkdir ($uploadfolder, 0777);
            }

            if ( !file_exists($destinationPath) ) {
                $oldmask = umask(0);  // helpful when used in linux server
                mkdir ($destinationPath, 0777);
            }

            $file_name =$this->image_upload($image,$file_type_required,$destinationPath);
            if($file_name != '') {
                $input['image'] = $file_name[0];
                $input['thumb'] = $file_name[1];
            }
            else{
                Session::flash('flash_message_error', 'Some thing error in image file type! Please Try again');
                return redirect()->back();
            }
        }



       DB::beginTransaction();
        try {
            
            Product::create($input);
            DB::commit();
            Session::flash('flash_message', 'Successfully added!');
        }catch (\Exception $e) {

            //If there are any exceptions, rollback the transaction`
            DB::rollback();
            Session::flash('flash_message_error', $e->getMessage());
        }

        return redirect()->route('product-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function show($slug)
    {
       $data = Product::where('slug',$slug)->first();
       $pageTitle ='Product';
       return view('product.show', ['data' => $data,'pageTitle' => $pageTitle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data = Product::where('slug',$slug)->first();
        $product_group_id = ProductGroup::lists('title','id');
        $cat_product_id = ProductCategory::lists('title','id');
        return view('product.update', [
                'data' => $data,
                'cat_product_id' => $cat_product_id,
                'product_group_id' => $product_group_id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ProductRequest $request, $slug)
    {
       $model = Product::where('slug',$slug)->first();
       $input = $request->all();
       $tittle = Input::get('title');
       $slug = str_slug($tittle);
       $input['slug'] = $slug;

        $image=Input::file('image');

      

        if(count($image)>0) {
            $file_type_required = 'png,jpeg,jpg';
            $destinationPath = 'uploads/product_image/';

            $uploadfolder = 'uploads/';

            if ( !file_exists($uploadfolder) ) {
                $oldmask = umask(0);  // helpful when used in linux server
                mkdir ($uploadfolder, 0777);
            }

            if ( !file_exists($destinationPath) ) {
                $oldmask = umask(0);  // helpful when used in linux server
                mkdir ($destinationPath, 0777);
            }

            $file_name = $this->image_upload($image, $file_type_required, $destinationPath);

            if ($file_name != '') {
                if(!empty($model->image)){
                    unlink(public_path()."/".$model->image);    
                }
                
                if(!empty($model->thumb)){
                    unlink(public_path()."/".$model->thumb);    
                }
                
                $input['image'] = $file_name[0];
                $input['thumb'] = $file_name[1];
            } else {
                Session::flash('flash_message_error', 'Some thing error in image file type! Please Try again');
            }
        }

       DB::beginTransaction();
        try {
            
            $model->update($input);
            DB::commit();
            Session::flash('flash_message', 'Successfully added!');
        }catch (\Exception $e) {

            //If there are any exceptions, rollback the transaction`
            DB::rollback();
            Session::flash('flash_message_error', $e->getMessage());
        }

        return redirect()->route('product-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($slug)
    {
       
        DB::beginTransaction();
        try {
            $model = Product::where('slug',$slug)->first();
            if ($model->delete()) {

                if(!empty($model->image)):
                    unlink(public_path()."/".$model->image);
                    unlink(public_path()."/".$model->thumb);
                endif;
                DB::commit();               
                Session::flash('flash_message', " Successfully Deleted.");
                return redirect()->back();
            }
        } catch(\Exception $e) {
            DB::rollback();
            Session::flash('flash_message_error',$e->getMessage() );
            return redirect()->back();
        }
    }

    public function image_show($slug){
        $pageTitle = 'Image';
        $image = Product::where('slug','=',$slug)->get();

        return view('product.view_image', [
            'pageTitle'=> $pageTitle, 'image'=>$image
        ]);
    }

    public function image_upload($image,$file_type_required,$destinationPath)
    {
        if ($image != '') {

            $img_name = ($_FILES['image']['name']);
            $random_number = rand(111, 999);

            $thumb_name = 'thumb_'.$random_number.'_'.$img_name;

            $newWidth=400;
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
                $image_name = rand(111, 999) . $image_original_name;
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
}
