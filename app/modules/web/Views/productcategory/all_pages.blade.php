@extends('web::layout.web_master')

@section('content')
	<div class="col-md-12">
		@include('web::layout.web_sidemenu')
		<div class="col-md-9 col-sm-12 col-xs-12 row-right-0">
			<div class="inner_banner margin-top-20 margin-bottom-30">
				@if(!empty($productcategory->featured_image))
					<img src="<?=$productcategory->featured_image?>">
				@else
					<img src="{{URL::to('')}}/web/images/inner-banner.png">
				@endif
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
								
								<div class="image_container">

									<div class="product-thum-image">
										<a href="{{URL::to('')}}/{{$product_data->image}}" class="fancybox">
											<img alt="{{@$product_data->meta_title}}" title="{{$product_data->title}}" src="{{URL::to('')}}/{{$product_data->image}}">												
										</a>
										
									</div>

								</div>
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


<script type='text/javascript' src="{{ URL::asset('web/scripts/jquery.fancybox.js') }}"></script> 
	 <script>
		jQuery(function(){
			
			
			jQuery('.fancybox').fancybox({
	     		'padding':0
	     	});

		});
	</script>


	

@stop