<div class="modal-dialog" style="width: 80%;">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">{{$pageTitle}}</h4>
        </div>

        <div class="modal-body">
            <div style="padding: 5px;">
                <table id="" class="table table-bordered table-hover table-striped">
                    <tr>
                        <th class="col-lg-4"> Title </th>
                        <td>{{ isset($data->title)?$data->title:''}}</td>
                    </tr>
                    <tr>
                        <th class="col-lg-4"> Slug </th>
                        <td>{{ isset($data->slug)?$data->slug:'' }}</td>
                    </tr>
                    <tr>
                        <th class="col-lg-4"> Featured Image </th>
                        <td>
                            <div>
                                @if($data->thumbnail)
                                <a href="{{ route('article.image.show', $data->slug) }}" class="btn btn-info btn-xs" data-toggle="modal" data-target="#imageView"><img src="{{ URL::to($data->thumbnail) }}" height="50px" width="50px" alt="{{$data->thumbnail}}" />
                                </a>
                                    @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th class="col-lg-4"> Desc </th>
                        <td>{!! isset($data->desc)?$data->desc:'' !!}</td>
                    </tr>
                    <tr>
                        <th class="col-lg-4"> Meta Title </th>
                        <td>{{ isset($data->meta_title)?$data->meta_title:'' }}</td>
                    </tr>
                    <tr>
                        <th class="col-lg-4"> Meta Keyword </th>
                        <td>{{ isset($data->meta_keyword)?$data->meta_keyword:'' }}</td>
                    </tr>
                    <tr>
                        <th class="col-lg-4"> Meta Desc </th>
                        <td>{{ isset($data->meta_desc)?$data->meta_desc:'' }}</td>
                    </tr>
                    <tr>
                        <th class="col-lg-4"> Status </th>
                        <td>{{ isset($data->status)?$data->status:'' }}</td>
                    </tr>


                </table>
            </div>
        </div>
        <div class="modal-footer">
            <a href="" class="btn btn-default" type="button"> Close </a>
        </div>
    </div>
</div>