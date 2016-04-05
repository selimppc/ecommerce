@extends('web::layout.web_master')

@section('content')
	<div class="col-md-12">
		@include('web::layout.web_sidemenu')
		<div class="col-md-9 col-sm-12 col-xs-12 row-right-0">
			<div class="inner_banner margin-top-50 margin-bottom-50">
				<img src="{{URL::to('')}}/web/images/inner-banner.png">
			</div>
		
			<div class="general-page-header">
				{{$data->title}}
			</div>

			<div class="row">

				<div class="general-page-description">

					<div class="col-md-6">
						<div class="row">

							<?php
								if(!empty($data->desc)){
									echo $data->desc;
								}else{
									echo 'No content yet.';
								}
							?>

						</div>
					</div>
					

					<div class="col-md-6">

						<div id="map"></div>
					     <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"
					        async defer></script>
					</div>

					<style>
				      #map {
				        width: 100%;
				        height: 400px;
				      }
				    </style>

				    <script>
					  function initMap() {
					    var mapDiv = document.getElementById('map');
					    var map = new google.maps.Map(mapDiv, {
					      center: {lat: -33.9495855, lng: 151.1367293},
					      zoom: 16
					    });
					  }
					</script>
				</div>
				
			</div>
		</div>
	</div>
@stop