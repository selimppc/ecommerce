<div class="modal-dialog"  style="width: 75%;">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">{{$pageTitle}}</h4>
        </div>

        <div class="modal-body">
            <div style="padding: 30px;">
                <table id="" class="table table-bordered table-hover table-striped">
                   <tr>
                        <th class="col-lg-4">Product Group</th>
                        <td>{{ isset($data->relProductGroup->title)?$data->relProductGroup->title:''}}</td>
                    </tr>
                    <tr>
                        <th class="col-lg-4">Product SubGroup</th>
                        {{--<td>{{ isset($data->product_subgroup_id)?$data->relSubGroup->title:''}}</td>--}}
                        <td>{{ @$data->relSubGroup->title}}</td>
                    </tr>
                  <!--   <tr>
                        <th class="col-lg-4">Category</th>
                        <td>{{ isset($data->relCatProduct->title)?$data->relCatProduct->title:''}}</td>
                    </tr> -->
                   <tr>
                        <th> Title </th>
                        <td>{{$data->title}}</td>
                    </tr>                
                    <tr>
                        <th> Slug </th>
                        <td>{{$data->slug}}</td>
                    </tr>
                    <tr>
                        <th> SKU Code </th>
                        <td>{{$data->sku}}</td>
                    </tr>
                    <tr>
                        <th> Sell Unit </th>
                        <td>{{$data->sell_unit}}</td>
                    </tr>

                    <tr>
                        <th> Sell Quantity </th>
                        <td>{{$data->sell_unit_quantity}}</td>
                    </tr>
                    <tr>
                        <th> Sell Rate </th>
                        <td>{{$data->sell_rate}}</td>
                    </tr>
                    <tr>
                        <th> Cost Price </th>
                        <td>{{$data->cost_price}}</td>
                    </tr>
                    <tr>
                        <th> Stock Unit </th>
                        <td>{{$data->stock_unit}}</td>
                    </tr>
                    <tr>
                        <th> Stock Quantity </th>
                        <td>{{$data->stock_unit_quantity}}</td>
                    </tr>
                    <tr>
                        <th> Is Price Vary?</th>
                        <td>{{$data->is_price_vary}}</td>
                    </tr>
                    <tr>
                        <th> Is featured? </th>
                        <td>{{$data->is_featured}}</td>
                    </tr>
                    <tr>
                        <th> Short Description </th>
                        <td>{{$data->short_description}}</td>
                    </tr>
                     <tr>
                        <th> Full Description </th>
                        <td>{{$data->long_description}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <a href="{{ URL::previous()}}" class="btn btn-default" type="button"> Close </a>
        </div>

    </div>
</div>

