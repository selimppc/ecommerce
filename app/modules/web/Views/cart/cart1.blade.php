@extends('web::layout.web_master')

@section('content')
	<div class="pos-new-product home-text-container">
		<div class="description">

			<div class="cart_container">
						<div class="step-container">
							<div class="step">
								<div class="step_images">
									<img src="{{URL::to('/')}}/web/images/step1.png">
								</div>
								<div class="step-text active">
									<div class="header">Step 1</div>
									<div class="your-basket">my basket</div>
								</div>
							</div>

							<div class="step">
								<div class="step_images">
									<img src="{{URL::to('/')}}/web/images/step2.png">
								</div>
								<div class="step-text">
									<div class="header">Step 2</div>
									<div class="your-basket">billing details</div>
								</div>
							</div>

							<div class="step">
								<div class="step_images">
									<img src="{{URL::to('/')}}/web/images/step3.png">
								</div>
								<div class="step-text">
									<div class="header">Step 3</div>
									<div class="your-basket">delivery details</div>
								</div>
							</div>

							<div class="step">
								<div class="step_images">
									<img src="{{URL::to('/')}}/web/images/step4.png">
								</div>
								<div class="step-text">
									<div class="header">Step 4</div>
									<div class="your-basket">check order</div>
								</div>
							</div>

							<div class="step">
								<div class="step_images">
									<img src="{{URL::to('/')}}/web/images/step5.png">
								</div>
								<div class="step-text">
									<div class="header">Step 5</div>
									<div class="your-basket">secure payment</div>
								</div>
							</div>

						</div>

						@if(!empty($product))

							<div class="cart-item-container">
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
									
									<form method="post" action="{{URL::to('/')}}/order/add_to_cart_update" >
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<tr>
										<td>
											<div class="added-images">
												<img src="{{URL::to('')}}/{{$product->image}}">
											</div>
											<div class="added-item-container">
												<a class="product-name" href="#">
													{{ $product->title }}				
												</a>
											</div>
										</td>
										<td>
											<input class="cart-quantity" type="text" name="quantity" value="{{$quantity}}">
										</td>
										<td>
											<div class="unit-price">
												$ {{$product->sell_rate}}					
											</div>
										</td>
										<td class="text-align-right">
											<div class="linetotal">
												<a href="{{URL::to('')}}/remove_cart" class="remove_cart">
													<img src="{{URL::to('')}}/web/images/delete.gif">
												</a>
												<span class="line_total">
													$ {{$product->sell_rate * $quantity}}					
												</span>
											</div>
										</td>
									</tr>
									<tr class="sub-total-tr">
										<td>
											&nbsp;
										</td>
										<td>										
											<input type="submit" value="Update Basket" class="update-basket">			
										</td>
										<td>Sub-Total:</td>
										<td class="text-align-right">$ {{$product->sell_rate * $quantity}}</td>
									</tr>
								</form>
								</tbody>
							</table>
						</div>


						@else

							<div class="description">
								<p>No product yet.</p>
							</div>
						@endif
						
							

						<div class="col-md-12 margin-top-30 margin-bottom-30">
							
								<!-- <a href="/site/index" class="cart-continue-shopping">Continue Shopping</a> -->
								<!-- <input type="submit" value="Checkout" class="cart-checkout">					 -->
								<a href="{{URL::to('/')}}/order-checkout" class="cart-checkout">Checkout</a>					
							
						</div>

					</div>	

		</div>
	</div>
@stop