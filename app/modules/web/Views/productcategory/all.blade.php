@extends('web::layout.web_master')

@section('content')

<div class="col-md-12">
	@include('web::layout.web_sidemenu')

	<div class="col-md-9 col-sm-12 col-xs-12 row-right-0">
		<div class="inner_banner margin-top-50 margin-bottom-50">

			@if($product_subgroup->product_group_id == 11)
				<img src="{{URL::to('')}}/web/images/special-clearence.jpg">
			@else
				<img src="{{URL::to('')}}/web/images/inner-banner.png">
			@endif
			
		</div>
	</div>

	<div class="col-md-9 col-sm-12 col-xs-12 row-right-0 ">
		<div class="width100 floatleft border-top-2 border-bottom-2">
			<div class="product-listing-header">
				<h2>{{$product_subgroup->title}}</h2>
			</div>
		</div>

		<div class="row">
			@if(!empty($productdata))
				@foreach($productdata as $product)
					<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
						<a href="{{URL::to('/')}}/{{$product->slug}}" class="featured_product_a">
							<div class="product-listing-image">
								<img src="{{URL::to('/')}}/{{$product->thumb}}">
							</div>

							<div class="product-listing-bottom">
								<div class="product-name">
									{{$product->title}}
								</div>
								<div class="product-price">
									AUD {{$product->sell_rate}}
								</div>
							</div>
						</a>
						<a class="product-listing-buy-now-button" href="{{URL::to('/')}}/{{$product->slug}}">Buy Now</a>
					</div>
				@endforeach
			@else
				<div class="no_product">No product yet</div>
			@endif
		</div>
	</div>
</div>
@stop