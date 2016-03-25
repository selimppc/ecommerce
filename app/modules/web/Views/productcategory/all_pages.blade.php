@extends('web::layout.web_master')

@section('content')
	<div class="col-md-12">
		@include('web::layout.web_sidemenu')
		<div class="col-md-9 col-sm-12 col-xs-12 row-right-0">
			<div class="inner_banner margin-top-50 margin-bottom-50">
				<img src="{{URL::to('')}}/web/images/inner-banner.png">
			</div>
		</div>

		<div class="col-md-9 col-sm-12 col-xs-12 row-right-0">
			<div class="general-page-header">
				{{$productcategory->title}}
			</div>

			<div class="row">

				<div class="general-page-description">
					@if(!empty($product_content))
						@foreach($product_content as $product_data)
							<div class="product_data_container">
								<div class="image_container" style="background-image:url('{{URL::to('')}}/{{$product_data->featured_image}}')"></div>
								<div class="title">{{$product_data->title}}</div>
								<div class="description">{{$product_data->desc}}</div>
							</div>
						@endforeach
					@else
						No content yet
					@endif
				</div>

			</div>
		</div>
	</div>

@stop