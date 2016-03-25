<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ProductGroup;
use App\ProductSubgroups;
use App\Http\Requests;

use App\Http\Controllers\Controller;


use DB;
use Session;
use Input;

class ProductSubgroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageTitle = "ProductSubgroups";
        $product_group_id = [''=>'Please select group']+ ProductGroup::lists('title','id')->all();
        // $product_group_id->prepend('Please Select');
        $data = ProductSubgroups::orderBy('id', 'DESC')->paginate(20);
        return view('product_subgroup.index',['data' => $data,'pageTitle' => $pageTitle,'product_group_id' => $product_group_id]);
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
    public function store(Requests\ProductSubgroupRequest $request)
    {
        $input = $request->all();
        $tittle = Input::get('title');
        $slug = str_slug($tittle);
        $input['slug'] = $slug;

        $product_group_id = Input::get('product_group_id');
        $input['product_group_id'] = $product_group_id;

        DB::beginTransaction();
        try {
            
            ProductSubgroups::create($input);
            DB::commit();
            Session::flash('flash_message', 'Successfully added!');
        }catch (\Exception $e) {

            //If there are any exceptions, rollback the transaction`
            DB::rollback();
            Session::flash('flash_message_error', $e->getMessage());
        }

        return redirect()->route('product-subgroup-index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $data = ProductSubgroups::where('id',$id)->first();
       $pageTitle ='Product Subgroup';
       return view('product_subgroup.show', ['data' => $data,'pageTitle' => $pageTitle]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = ProductSubgroups::where('id',$id)->first();
        $product_group_id = ProductGroup::lists('title','id');
        return view('product_subgroup.update', ['data' => $data,'product_group_id' => $product_group_id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ProductSubgroupRequest $request, $id)
    {
       $model = ProductSubgroups::where('id',$id)->first();
       $input = $request->all();
       $tittle = Input::get('title');
       $slug = str_slug($tittle);
       $input['slug'] = $slug;


        $product_group_id = Input::get('product_group_id');
        $input['product_group_id'] = $product_group_id;

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

        return redirect()->route('product-subgroup-index');
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

    public function delete($id)
    {
       
        DB::beginTransaction();
        try {
            $model = ProductSubgroups::where('id',$id)->first();
            if ($model->delete()) {
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
}
