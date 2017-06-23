<div class="row">

	<div class="col-xs-12">

		<div class="form-group">
	        {!! Form::label('value', 'Value:', ['class' => 'control-label']) !!}
	        <small class="required">(Required)</small>
	        {!! Form::text('value', NULL, ['id'=>'value', 'class' => 'form-control','required']) !!}
	    </div>

	</div>

</div>

<a href=""  class="btn btn-default" type="button"> Close </a>

{!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}