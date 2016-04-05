@extends('web::layout.web_master')

@section('content')
	
	<div class="col-md-12">

		@include('web::layout.web_sidemenu')


		<div class="col-md-9 col-sm-12 col-xs-12 row-right-0">
		<div class="cart_container">
			<div class="step-container">
				<div class="step">
					<div class="step_images">
						<img src="{{URL::to('')}}/web/images/step1.png">
					</div>
					<div class="step-text">
						<div class="header">Step 1</div>
						<div class="your-basket">my basket</div>
					</div>
				</div>

				<div class="step">
					<div class="step_images">
						<img src="{{URL::to('')}}/web/images/step2.png">
					</div>
					<div class="step-text">
						<div class="header">Step 2</div>
						<div class="your-basket">billing details</div>
					</div>
				</div>

				<div class="step">
					<div class="step_images">
						<img src="{{URL::to('')}}/web/images/step3.png">
					</div>
					<div class="step-text">
						<div class="header">Step 3</div>
						<div class="your-basket">delivery details</div>
					</div>
				</div>

				<div class="step">
					<div class="step_images">
						<img src="{{URL::to('')}}/web/images/step4.png">
					</div>
					<div class="step-text active">
						<div class="header">Step 4</div>
						<div class="your-basket">check order</div>
					</div>
				</div>

				<div class="step">
					<div class="step_images">
						<img src="{{URL::to('')}}/web/images/step5.png">
					</div>
					<div class="step-text">
						<div class="header">Step 5</div>
						<div class="your-basket">secure payment</div>
					</div>
				</div>

			</div>


			<div class="cart-item-container">

				@if(!empty($product_cart_r))

					<table class="table table-striped cart-table">
					<thead>
						<tr>
							<td>Item</td>
							<td>Qty</td>
							<td>Unit Price</td>
							<td class="text-align-right">Line Total</td>
						</tr>
					</thead>

					<tbody>
						<?php
							$total_value = 0;

							$count = 0;
						?>
						@foreach($product_cart_r as $product_cart)
							<?php
								$product_id = $product_cart['product_id'];
								$product = DB::table('product')->where('id',$product_id)->first();
							?>
							<tr>
								
								<td>
									<div class="added-images">
										<img src="{{Url::to('')}}/{{$product->thumb}}">
									</div>
									<div class="added-item-container">
										<a class="product-name" href="#">
											{{$product->title}}
										</a>
									</div>
								</td>
								<td>
									<input class="cart-quantity" type="number" min="1" name="product_quantity" value="{{$product_cart['product_qty']}}">
								</td>
								<td>
									<div class="unit-price">
										${{$product_cart['product_price']}}
									</div>
								</td>
								<td class="text-align-right">
									<div class="linetotal">
										
										<span class="line_total">
											${{$product_cart['product_qty']*$product_cart['product_price']}}				
											<?php
												$total_value+=$product_cart['product_qty']*$product_cart['product_price'];
											?>
										</span>
									</div>
								</td>	
								
							</tr>
							<?php $count++;?>
						@endforeach
							<tr class="sub-total-tr">
								<td>
									&nbsp;</td>
								<td>
								</td>
								<td>Total:</td>
								<td class="text-align-right">${{$total_value}}</td>
								
							</tr>
					</tbody>
				</table>


				@else
					<div class="empty_cart">Your Cart is empty</div>
				@endif
				
			</div>

			<div class="col-md-6">
				<div class="row">
					<div class="billing_address">
						<h2>Billing Details</h2>
						<p>{{$user_data->first_name}} {{$user_data->last_name}}</p>
						<p>{{$user_data->email}}</p>
						<p>{{$user_data->address}}</p>
						<p>{{$user_data->suburb}} {{$user_data->state}} {{$user_data->postcode}}</p>
						<p>{{$user_data->country}}</p>
						<p>{{$user_data->telephone}}</p>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="row">
					<div class="billing_address">
						<h2>Delivery Details</h2>
						<p>{{$delivery_data->first_name}} {{$delivery_data->last_name}}</p>
						<p>{{$delivery_data->email}}</p>
						<p>{{$delivery_data->address}}</p>
						<p>{{$delivery_data->suburb}} {{$delivery_data->state}} {{$delivery_data->postcode}}</p>
						<p>{{$delivery_data->country}}</p>
						<p>{{$delivery_data->telephone}}</p>
					</div>
				</div>
			</div>

			<div class="col-md-12 margin-top-30">
				<div class="row">
					<a href="{{URL::to('')}}" class="cart-continue-shopping">Continue Shopping</a>

					@if(Session::has('product_cart') && count(Session::get('product_cart')) > 0)
						
						<form id="submit_payment" method="post" action="https://www.paypal.com/cgi-bin/webscr">
							<input type="hidden" name="address_override" value="1">
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="upload" value="1">
							<input type="hidden" name="business" value="offthewallframing@gmail.com">
							<input type="hidden" name="currency_code" value="AUD">
							<!-- <input type="hidden" name="invoice" value="10" > -->

							<input type="hidden" name="shipping" value="0.00">
							<input type="hidden" name="shipping2" value="20.00">

							<?php
								$total_value = 0;

								$count = 1;
							?>
							@foreach($product_cart_r as $product_cart)
								<?php
									$product_id = $product_cart['product_id'];
									$product = DB::table('product')->where('id',$product_id)->first();
								?>
              					
									<input type="hidden" name="item_name_{{$count}}" value="{{$product->title}}">
									<input type="hidden" name="amount_{{$count}}" value="{{$product_cart['product_price']}}">
									<input type="hidden" name="quantity_{{$count}}" value="{{$product_cart['product_qty']}}">
										
		                  			<?php $count++;?>
								@endforeach	

							<input type="hidden" name="return" value="">
					
							<input style="float:right;" class="paynowbutton" type="image" src="{{URL::to('')}}/web/images/paynow.png" border="0" name="submit" width="120" alt="Make payments with PayPal - it's fast, free and secure!">
						
					</form>
					@endif
					

						
				</div>
			</div>

		</div>
	</div>


	</div>

@stop