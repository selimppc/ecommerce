@extends('layout.master')
@section('sidebar')
@parent
@include('layout.sidebar')
@stop

@section('content')
        <!-- page start-->
<div class="row">
    <div class="col-lg-8">
        <section class="panel">

            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            @if(Session::has('flash_message'))
                <div class="alert alert-success">
                    <p>{{ Session::get('flash_message') }}</p>
                </div>
            @endif
            @if(Session::has('flash_message_error'))
                <div class="alert alert-danger">
                    <p>{{ Session::get('flash_message_error') }}</p>
                </div>
            @endif



            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        {{$pageTitle}}
                    </header>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'article-store','files'=>'true']) !!}

                <div class="form-group">
                    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
                    <small class="required">(Required)</small>
                    {!! Form::text('title', null, ['id'=>'title', 'class' => 'form-control','required','onkeyup'=>"sel_url()"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Slug', 'Slug:', ['class' => 'control-label']) !!}
                    {!! Form::text('slug', null, ['id'=>'slug', 'class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('type', 'Type:', ['class' => 'control-label']) !!}
                    <small class="required">(Required)</small>
                    @if(count($type)>0)
                        {!! Form::select('type', $type,Input::old('type'),['class' => 'form-control','id'=>'type','required']) !!}
                    @else
                        {!! Form::text('type', 'No Type ID available',['id'=>'type','class' => 'form-control','required','disabled']) !!}
                    @endif
                </div>
                
                <div class="form-group">
                    <label for="sub_page_id" class="control-label">Sub Page:</label>
                    <small class="required">(Required)</small> 
                    <select class='form-control' id="sub_page_id" name="sub_page_id">

                    </select>                   
                </div>

                <div class="form-group">
                    {!! Form::label('desc', 'Description', ['class' => 'control-label']) !!}
                    {!! Form::textarea('desc', null, ['id'=>'desc', 'class' => 'form-control', 'cols'=>'60' , 'rows'=>'16']) !!}
                    {{--{!! Form::textarea('desc', null, ['id'=>'desc', 'class' => 'form-control wysihtml5', 'cols'=>'60' , 'rows'=>'16']) !!}--}}
                </div>
                <div class="form-group last">
                    <label class="control-label col-md-3">Featured Image</label>
                    <div class="col-md-9">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-new thumbnail" style="width: 120px; height: 120px;">
                                {{--<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />--}}
                                {{--@if($data['featured_image'] != '')
                                    <a href="{{ route('article.image.show', $data['id']) }}" class="btn btn-info btn-xs" data-toggle="modal" data-target="#imageView"><img src="{{ URL::to($data['thumbnail']) }}" alt="{{$data['thumbnail']}}" />
                                    </a>
                                @else
                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                @endif--}}
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                            <div>
                                               <span class="btn btn-white btn-file">
                                               <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image</span>
                                               <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                               <input type="file" name="featured_image" id="featured_image" class="default" />
                                               </span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                            </div>
                        </div>
                        <span class="label label-danger">NOTE!</span>
                                         <span>
                                         Attached image thumbnail is
                                         supported in Latest Firefox, Chrome, Opera,
                                         Safari and Internet Explorer 10 only
                                         </span>
                    </div>
                </div>


                <div class="form-group last">
                    <label class="control-label col-md-3">Featured Image 2</label>
                    <div class="col-md-9">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-new thumbnail" style="width: 120px; height: 120px;">
                                {{--<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />--}}
                                {{--@if($data['featured_image'] != '')
                                    <a href="{{ route('article.image.show', $data['id']) }}" class="btn btn-info btn-xs" data-toggle="modal" data-target="#imageView"><img src="{{ URL::to($data['thumbnail']) }}" alt="{{$data['thumbnail']}}" />
                                    </a>
                                @else
                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />
                                @endif--}}
                            </div>
                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                            <div>
                                       <span class="btn btn-white btn-file">
                                       <span class="fileupload-new"><i class="icon-paper-clip"></i> Select image-2</span>
                                       <span class="fileupload-exists"><i class="icon-undo"></i> Change</span>
                                       <input type="file" name="featured_image_2" id="featured_image_2" class="default" />
                                       </span>
                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="icon-trash"></i> Remove</a>
                            </div>
                        </div>
                        <span class="label label-danger">NOTE!</span>
                                 <span>
                                 Attached image thumbnail is
                                 supported in Latest Firefox, Chrome, Opera,
                                 Safari and Internet Explorer 10 only
                                 </span>
                    </div>
                </div>


                <div class="form-group">
                    {!! Form::label('meta_title', 'Meta Title:', ['class' => 'control-label']) !!}
                    {!! Form::text('meta_title', null, ['id'=>'meta_title', 'class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('meta_keyword', 'Meta Keyword:', ['class' => 'control-label']) !!}
                    {!! Form::text('meta_keyword', null, ['id'=>'meta_keyword', 'class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('meta_desc', 'Meta Desc:', ['class' => 'control-label']) !!}
                    {!! Form::textarea('meta_desc', null, ['id'=>'meta_desc', 'class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('sort_order', 'Sort Order:', ['class' => 'control-label']) !!}
                    {!! Form::text('sort_order', null, ['id'=>'sort_order', 'class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('status', 'Status:', ['class' => 'control-label']) !!}
                    <small class="required">(Required)</small>
                    {!! Form::Select('status',array('active'=>'Active','inactive'=>'Inactive'),Input::old('status'),['class'=>'form-control ','required']) !!}
                </div>

                <p> &nbsp; </p>

                {!! Form::submit('Save changes', ['class' => 'btn btn-success']) !!}
                        <a href="{{ route('article-index') }}" class="btn btn-default" type="button"> Close </a>


                        {!! Form::close() !!}

                    </div>

                </section>
            </div>



        </section>
    </div>
</div>
<!-- page end-->

<!-- Modal  -->
<div class="modal fade" id="etsbModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
</div>
<!-- modal -->

<!--script for this page only-->
@if($errors->any())
    <script type="text/javascript">
        $(function(){
            $("#addData").modal('show');
        });
    </script>
@endif
<script>
    function sel_url() {
        $('#title').on('keyup', function () {
            var string = $(this).val();
            string = string.split(" ");
            var myStr1 = string.join('-');
            var myStr = myStr1.toLowerCase();
            $('#slug').val(myStr);
        });
    }
</script>
<a href="{{Url::to('')}}" id="site_url">&nbsp;</a>
<script>
    $(function(){

        $("#type").on('change',function(e){

            var type = $("#type").val();
            var site_url = $('#site_url').attr("href");
            
            $.ajax({
                url: site_url+'/article/add_subpage_ajax',
                type: 'POST',
                dataType: 'json',
                data: {_token: '{!! csrf_token() !!}',type:type,},
                success: function(response)
                {
                    $("#sub_page_id").html(response.message);
                }
            });


            return false;
        });

        

    });
</script>
@stop