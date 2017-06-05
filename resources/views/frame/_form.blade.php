@if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<div class="row">

	<div class="col-md-6 col-xs-12">


		<div class="form-group">
		    {!! Form::label('frame_category_id', 'Frame Category', ['class' => 'control-label']) !!}
		    <small class="required">(Required)</small>
		    @if(count($frame_category_id)>0)
		        {!! Form::select('frame_category_id', $frame_category_id,Input::old('frame_category_id'),['class' => 'form-control','id'=>'frame_category_id','required']) !!}
		    @else
		        {!! Form::text('frame_category_id', 'No Category ID available',['id'=>'frame_category_id','class' => 'form-control','required','disabled']) !!}
		    @endif
		</div>

		<div class="form-group">
	        {!! Form::label('frame_width', 'Frame Width:', ['class' => 'control-label']) !!}
	        <small class="required">(Required)</small>
	        {!! Form::number('frame_width', null, ['id'=>'frame_width', 'class' => 'form-control','required']) !!}
	    </div>

	    <div class="form-group">
	        {!! Form::label('frame_rebate', 'Frame Rebate:', ['class' => 'control-label']) !!}
	        <small class="required">(Required)</small>
	        {!! Form::number('frame_rebate', null, ['id'=>'frame_rebate', 'class' => 'form-control','required']) !!}
	    </div>

	    <div class="form-group">
	        {!! Form::label('frame_min', 'Frame Min Width:', ['class' => 'control-label']) !!}
	        <small class="required">(Required)</small>
	        {!! Form::number('frame_min', null, ['id'=>'frame_min', 'class' => 'form-control','required']) !!}
	    </div>

	    <div class="form-group">
	        {!! Form::label('price', 'Price:', ['class' => 'control-label']) !!}
	        <small class="required">(Required)</small>
	        {!! Form::number('price', null, ['id'=>'price', 'class' => 'form-control','required']) !!}
	    </div>

	    <div class="form-group">
	        {!! Form::label('status', 'Status:', ['class' => 'control-label']) !!}
	        <small class="required">(Required)</small>
	        {!! Form::Select('status',array('active'=>'Active','inactive'=>'Inactive'),Input::old('status'),['class'=>'form-control ','required']) !!}
	    </div>

	</div>

	<div class="col-md-6 col-xs-12">

		<div class="form-group">
	        {!! Form::label('frame_code', 'Frame Code:', ['class' => 'control-label']) !!}
	        <small class="required">(Required)</small>
	        {!! Form::text('frame_code', null, ['id'=>'frame_code', 'class' => 'form-control','required']) !!}
	    </div>

	    <div class="form-group">
	        {!! Form::label('frame_depth', 'Frame Depth:', ['class' => 'control-label']) !!}
	        <small class="required">(Required)</small>
	        {!! Form::number('frame_depth', null, ['id'=>'frame_depth', 'class' => 'form-control','required']) !!}
	    </div>

	    <div class="form-group">
	        {!! Form::label('frame_rate', 'Frame Rate:', ['class' => 'control-label']) !!}
	        <small class="required">(Required)</small>
	        {!! Form::number('frame_rate', null, ['id'=>'frame_rate', 'class' => 'form-control','required']) !!}
	    </div>

	    <div class="form-group">
	        {!! Form::label('frame_max', 'Frame Max Width:', ['class' => 'control-label']) !!}
	        <small class="required">(Required)</small>
	        {!! Form::number('frame_max', null, ['id'=>'frame_max', 'class' => 'form-control','required']) !!}
	    </div>

	    <div class="form-group">
	        {!! Form::label('sort_order', 'Sort Order:', ['class' => 'control-label']) !!}
	        <small class="required">(Required)</small>
	        {!! Form::number('sort_order', null, ['id'=>'sort_order', 'class' => 'form-control','required']) !!}
	    </div>

	</div>
</div>

<p> &nbsp; </p>

<a href=""  class="btn btn-default" type="button"> Close </a>

{!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
