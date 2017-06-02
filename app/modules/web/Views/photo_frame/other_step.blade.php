<div id="order-step-tabs" class="row">
	<div class="first-step-overlay"></div>
	<ul class="card-tab-list" id="list-of-tabs">
		<li><a href="#tab-frames"><span class="hidden-sm hidden-xs tab-number">2. </span>Frames</a></li>
		<li><a href="#tab-mats"><span class="hidden-sm hidden-xs tab-number">3. </span>Mats</a></li>
		<li><a href="#tab-glass-and-backing"><span class="hidden-sm hidden-xs tab-number">4. </span>Glass
				& Backing</a></li>
		<li><a href="#tab-printing"><span class="hidden-sm hidden-xs tab-number">5. </span>Printing</a></li>
		
	</ul>
	
	@include('web::photo_frame.tab_frame')
	@include('web::photo_frame.tab_mats')
	@include('web::photo_frame.tab_printing')
	@include('web::photo_frame.tab_canvas_matt')


	
	<div id="tab-glass-and-backing" class="card card-tab-content" data-tab-name="Glass & Backing" style="display:none;">
		<div id="glass-type-row" class="row">
			<div class="col-lg-6">
				<h3 class="card-title">Glass</h3>
				<fieldset id="glass-type"><label class="material-radio" data-glass-type="clear-glass">
						<input type="radio" name="glass-type" value="clear-glass" checked="checked" data-calc-product/>
						<span class="outer"><span class="inner"></span></span>
						Clear Glass
					</label> <label class="material-radio" data-glass-type="clear-perspex">
						<input type="radio" name="glass-type" value="clear-perspex" data-calc-product/>
						<span class="outer"><span class="inner"></span></span>
						Clear Perspex
					</label> <label class="material-radio" data-glass-type="non-reflective-glass">
						<input type="radio" name="glass-type" value="non-reflective-glass" data-calc-product/>
						<span class="outer"><span class="inner"></span></span>
						Non-Reflective Glass
					</label> <label class="material-radio" data-glass-type="uv-clear-glass">
						<input type="radio" name="glass-type" value="uv-clear-glass" data-calc-product/>
						<span class="outer"><span class="inner"></span></span>
						UV Clear Glass
					</label> <label class="material-radio" data-glass-type="uv-non-reflective-glass">
						<input type="radio" name="glass-type" value="uv-non-reflective-glass" data-calc-product/>
						<span class="outer"><span class="inner"></span></span>
						UV Non-Reflective Glass
					</label> <label class="material-radio" data-glass-type="no-glass">
						<input type="radio" name="glass-type" value="no-glass" data-calc-product/>
						<span class="outer"><span class="inner"></span></span>
						No Glass
					</label></fieldset>
			</div>
			<div class="col-lg-6">
				<div id="extra-info">
					<div class="glass-info" data-info-id="clear-glass">
						<ul class='list-group'>
							<li class='list-group-item'>
								<h4>Glass Details</h4>
							</li>
							<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>2mm Thick</li>
							<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>Cost-effective</li>
							<li class='list-group-item'>
								<span class='glyphicon glyphicon-ok'></span>Available in very large sizes
							</li>
						</ul>
					</div>
					<div class="glass-info" data-info-id="clear-perspex">
						<ul class='list-group'>
							<li class='list-group-item'>
								<h4>Glass Details</h4>
							</li>
							<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>2mm Thick</li>
							<li class='list-group-item'>
								<span class='glyphicon glyphicon-ok'></span>Optical Grade (Clear as glass)
							</li>
							<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>Highly Durable</li>
							<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>Very Light</li>
							<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>94% UV Resistant
							</li>
						</ul>
					</div>
					<div class="glass-info" data-info-id="non-reflective-glass">
						<ul class='list-group'>
							<li class='list-group-item'>
								<h4>Glass Details</h4>
							</li>
							<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>2mm Thick</li>
							<li class='list-group-item'>
								<span class='glyphicon glyphicon-ok'></span>Removes Glare and Reflections
							</li>
							<li class='list-group-item'>
								<span class='glyphicon glyphicon-ok'></span>Great for highly lit rooms
							</li>
						</ul>
					</div>
					<div class="glass-info" data-info-id="uv-clear-glass">
						<ul class='list-group'>
							<li class='list-group-item'>
								<h4>Glass Details</h4>
							</li>
							<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>2.5mm Thick</li>
							<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>99% UV Resistant
							</li>
							<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>Conservation Grade
							</li>
							<li class='list-group-item'>
								<span class='glyphicon glyphicon-ok'></span>Protects artworks from fading
							</li>
						</ul>
					</div>
					<div class="glass-info" data-info-id="uv-non-reflective-glass">
						<ul class='list-group'>
							<li class='list-group-item'>
								<h4>Glass Details</h4>
							</li>
							<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>2.5mm Thick</li>
							<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>99% UV Resistant
							</li>
							<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>Conservation Grade
							</li>
							<li class='list-group-item'>
								<span class='glyphicon glyphicon-ok'></span>Protects artworks from fading
							</li>
							<li class='list-group-item'>
								<span class='glyphicon glyphicon-ok'></span>Reduces Glare and Reflections
							</li>
						</ul>
					</div>
					<div class="glass-info" data-info-id="no-glass">
						<ul class='list-group'>
							<li class='list-group-item'>
								<h4>Glass Details</h4>
							</li>
							<li class='list-group-item'>
								<span class='glyphicon glyphicon-ok'></span>Cut and Join, Empty Frame
							</li>
							<li class='list-group-item'>
								<span class='glyphicon glyphicon-ok'></span>Frame your protected canvases and artworks
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="backing-type-row" class="row">
			<div class="col-lg-6">
				<h3 class="card-title">Backing</h3>
				<fieldset id="backing-type"><label class="material-radio" data-backing-type="MDF">
						<input type="radio" name="backing-type" value="MDF" checked="checked" data-calc-product/>
						<span class="outer"><span class="inner"></span></span>
						MDF
						<button id="no-mdf-info" type="button" class="btn btn-default" style="padding:2px 4px;" data-container="body" data-toggle="popover" data-placement="bottom" data-trigger="click" data-content="MDF is unavailable when printing to ensure the highest quality. Use non-adhesive foam core if you'd like to swap out your images in the future." data-original-title="" title="">
							<i class="fa fa-question-circle" style="font-size: 2rem;padding: 0 !important;color: #2b2b2b;"></i>
						</button>
					</label> <label class="material-radio" data-backing-type="adhesive-foamcore">
						<input type="radio" name="backing-type" value="adhesive-foamcore" data-calc-product/>
						<span class="outer"><span class="inner"></span></span>
						Adhesive Foam Core
					</label> <label class="material-radio" data-backing-type="non-adhesive-foamcore">
						<input type="radio" name="backing-type" value="non-adhesive-foamcore" data-calc-product/>
						<span class="outer"><span class="inner"></span></span>
						Non-Adhesive Foam Core
					</label>
					<label style="display:none" aria-hidden="true"><input type="radio" name="backing-type" value="none" data-calc-product style="display:none"/></label>
				</fieldset>
			</div>
			<div class="col-lg-6">
				<div class="backing-info" data-info-id="MDF">
					<ul class='list-group'>
						<li class='list-group-item'>
							<h4>Backing Details</h4>
						</li>
						<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>Great value for money
						</li>
						<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>Rigid and Durable</li>
						<li class='list-group-item'>
							<span class='glyphicon glyphicon-ok'></span>Can swap out images at any time
						</li>
						<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>Rigid and Durable</li>
					</ul>
				</div>
				<div class="backing-info" data-info-id="adhesive-foamcore">
					<ul class='list-group'>
						<li class='list-group-item'>
							<h4>Backing Details</h4>
						</li>
						<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>Acid-Free</li>
						<li class='list-group-item'>
							<span class='glyphicon glyphicon-ok'></span>Long term protection of image from fading
						</li>
						<li class='list-group-item'>
							<span class='glyphicon glyphicon-ok'></span>Flattest mounting of image
						</li>
						<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>Very Light</li>
					</ul>
				</div>
				<div class="backing-info" data-info-id="non-adhesive-foamcore">
					<ul class='list-group'>
						<li class='list-group-item'>
							<h4>Backing Details</h4>
						</li>
						<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>Acid-Free</li>
						<li class='list-group-item'>
							<span class='glyphicon glyphicon-ok'></span>Long term protection of image from fading
						</li>
						<li class='list-group-item'>
							<span class='glyphicon glyphicon-ok'></span>Can swap out images at any time
						</li>
						<li class='list-group-item'><span class='glyphicon glyphicon-ok'></span>Very Light</li>
					</ul>
				</div>
			</div>
		</div>
		<a class="prev-button btn btn-primary text-center" href="#">
			<i class="fa fa-chevron-left" aria-hidden="true"></i> </a>
		<a class="next-button btn btn-primary text-center " href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i>
		</a>
	</div>
</div>