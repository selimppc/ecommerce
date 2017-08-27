<div class="modal-dialog"  style="width: 75%;">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">{{$pageTitle}}</h4>
        </div>

        <div class="modal-body">
            <div style="padding: 30px;">
                <table id="" class="table table-bordered table-hover table-striped">

                	<tr>
                        <th class="col-lg-4">Title</th>
                        <td>{{ isset($data->title)?$data->title:'' }}</td>
                    </tr> 

                    <tr>
                        <th class="col-lg-4">Value</th>
                        <td>{{ isset($data->value)?$data->value:'' }}</td>
                    </tr> 

                    <tr>
                        <th class="col-lg-4">Image</th>
                        <td>
                        	<img src="{{ URL::to($data['image_link']) }}" height="50px" width="50px" alt="{{$data['image_link']}}" />
                        </td>
                    </tr> 

                    <tr>
                        <th class="col-lg-4">Sort Order</th>
                        <td>{{ isset($data->sort_order)?$data->sort_order:'' }}</td>
                    </tr> 

                    <tr>
                        <th class="col-lg-4">Status</th>
                        <td>{{ isset($data->status)?$data->status:'' }}</td>
                    </tr> 

                </table>
            </div>
        </div> 

        <div class="modal-footer">
            <a href="{{ URL::previous()}}" class="btn btn-default" type="button"> Close </a>
        </div>   

    </div>
</div>        