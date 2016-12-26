<?php
	use App\ProductSubgroups;
?>
<div class="col-md-3 padding-left-0">
<span class="mobile_menu open_mobile_menu">=</span>
	<div class="top-left-menu-container">
		<ul class="left-menu-product scroll-menu-close">

			<li>
				<a href="{{URL::to('')}}/product">All Products</a>
			</li>

			@if(!empty($productgroup_data))
				@foreach($productgroup_data as $productgroup)
					<li>
						@if($productgroup->id == '4')
							<a class="sidemenu-{{$productgroup->id}}" href="{{URL::to('')}}/pre-order">{{$productgroup->title}}</a>
						@elseif($productgroup->id == '5')
							<a class="sidemenu-{{$productgroup->id}}" href="{{URL::to('')}}/lay-by-instruction">{{$productgroup->title}}</a>
						@elseif($productgroup->id == '3')
							<a class="sidemenu-{{$productgroup->id}}" href="{{URL::to('')}}/{{$productgroup->slug}}">{{$productgroup->title}}</a>
						@else
							<a class="sidemenu-{{$productgroup->id}}" href="#">{{$productgroup->title}}</a>
						@endif
						

						<?php
							$product_subgroup_data =  DB::table('product_subgroup')->where('product_group_id', $productgroup->id)->orderBy('sort_order','asc')->get();
							if(!empty($product_subgroup_data)):
						?>
								<ul>
									@foreach($product_subgroup_data as $product_subgroup)
										<li>
											<a href="{{URL::to('/')}}/{{$productgroup->slug}}/{{$product_subgroup->slug}}">{{$product_subgroup->title}}</a>
											<?php
												if($product_subgroup->id == 7):
											?>
												<ul>
													<li>
														<a href="{{Url::to('/')}}/{{$productgroup->slug}}/{{$product_subgroup->slug}}/by-brand">By Brands</a>
													</li>
													<li>
														<a href="{{Url::to('/')}}/{{$productgroup->slug}}/{{$product_subgroup->slug}}/by-seats">By Seats</a>
													</li>
													<li>
														<a href="{{Url::to('/')}}/{{$productgroup->slug}}/{{$product_subgroup->slug}}/by-voltage">By Voltage</a>
													</li>
												</ul>
											<?php endif; ?>
										</li>
									@endforeach
								</ul>

						<?php endif; ?>
					</li>
				@endforeach
			@endif
			
			
		</ul>

		

		<div class="home-left-sidebar-fb">
			<div class="fb-page" data-href="https://www.facebook.com/Asims-Toys-Kids-Ride-On-Toys-869410779777184/" data-tabs="timeline" data-width="280" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
		</div>
	</div>



    <div>
        <a href="{{URL::to('extra-accessories/number-plates')}}">
        <h3 style="color: white">Number Plates</h3>
        <amp-img  src="{{asset('images/number_plate_img.jpg')}}" width="20" height="20" layout="responsive" ></amp-img>
        </a>
    </div>
</div>


<script>
	$(".mobile_menu").click(function(){
	    $(".top-left-menu-container").toggle();
	});
</script>