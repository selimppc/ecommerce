@if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<div class="form-group">
    {!! Form::label('product_group_id', 'Product Group:', ['class' => 'control-label']) !!}
    <small class="required">(Required)</small>
    @if(count($product_group_id)>0)
    
        {!! Form::select('product_group_id', $product_group_id,Input::old('product_group_id'),['class' => 'form-control','required']) !!}
    @else
        {!! Form::text('product_group_id', 'No Group ID available',['id'=>'product_group_id','class' => 'form-control','required','disabled']) !!}
    @endif
</div>

<div class="form-group">
	{!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
	<small class="required">(Required)</small>
	{!! Form::text('title', null, ['id'=>'title', 'class' => 'form-control','required','onkeyup'=>"sel_url()"]) !!}
</div>

<div class="form-group">
	{!! Form::label('Slug', 'Slug:', ['class' => 'control-label']) !!}
	<small class="required">(Required)</small>
	{!! Form::text('slug', null, ['id'=>'slug', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Sort Order', 'Sort Order:', ['class' => 'control-label']) !!}
    {!! Form::text('sort_order', null, ['id'=>'sort_order', 'class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('status', 'Status:', ['class' => 'control-label']) !!}
    <small class="required">(Required)</small>
    {!! Form::Select('status',array('active'=>'Active','inactive'=>'Inactive'),Input::old('status'),['class'=>'form-control ','required']) !!}
</div>

<a href="{{ route('product-subgroup-index') }}" class="btn btn-default" type="button"> Close </a>
{!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}

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