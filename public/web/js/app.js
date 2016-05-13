

function centerElement(selector){

	var parentHeight = $(selector).parent().height();
	var childHeight = $(selector).height();

	var topMargin = (parentHeight - childHeight)/2;

	if(topMargin>0){
		$(selector).css({"margin-top": topMargin});
		return topMargin;
	}else{
		$(selector).css({"margin-top": "auto"});
		return 0;
	}	
}

function centerElementRotate(selector){

	var parentHeight = $(selector).parent().height();
	var childHeight = $(selector).width();

	var topMargin = (parentHeight - childHeight)/2;

	console.log(parentHeight+ ':'+ childHeight +':'+topMargin);

	if(topMargin>0){
		$(selector).css({"margin-top": topMargin});
		return topMargin;
	} else{
		$(selector).css({"margin-top": "auto"});
		return 0;
	}	
}

function pixelToCM(pixel){
	return (pixel/28.35).toFixed(2);
}

function cmToPixel(cm){
	return (cm*28.35).toFixed(2);
}


function sizeInfo(callback, selectors, rotate){
	$(selectors[0]).val(callback($('.canvas-container').width()) + " cm");
	$(selectors[1]).val(callback($('.canvas-container').height())+ " cm");

	if(rotate){
		$(selectors[1]).val(callback($('.canvas-container').width())+ " cm");
		$(selectors[0]).val(callback($('.canvas-container').height())+ " cm");
	}
}

/*---function for frame_photo.php----*/
var GLOBAL_INFO = {};

$(document).ready(function(){

	/*var host= "ws://localhost:8080";

	var ws = new WebSocket(host);

	  ws.onopen = function() {
	    // ws.send("Hello");  // Sends a message.
	  };
	  ws.onmessage = function(e) {
	    // Receives a message.
	    alert(e.data);
	  };
	  ws.onclose = function() {
	    // alert("closed");
	  };*/

	  

	  var frameData=['thick@4cm.png', 'thick_gold@10cm.png', 'thick_wood@4cm.png', 'thick_wood2@4cm.png','thick_wood3@4cm.png','thick_glass@4cm.png','thick_wood4@6cm.png', 'thick_gold2@10cm.png'];
	  var wallData=[
	  'wall (1).jpg','wall (2).jpg','wall (3).jpg','wall (4).jpg','wall (5).jpg','wall (12).jpg','wall (6).jpg'
	  ,'wall (7).jpg','wall (8).jpg','wall (9).jpg','wall (10).jpg','wall (11).jpg'
	  ,'wall (13).jpg','wall (14).jpg','wall (15).jpg','wall (16).jpg','wall (17).jpg'
	  ,'wall (18).jpg','wall (19).jpg','wall (20).jpg'
	  ];

	  addIndex('#index-frames', frameData);
	  setTimeout(function(){
	  	initImgPosition();
	  }, 1000);


	  $(function () {
		    $('#index-tab a:first').tab('show');
	  });

	  $('.fram-thumbnail').click(function() {
		      $(".fram-thumbnail.active").removeClass("active");
		      $(this).addClass('active');
		      GLOBAL_INFO.url = $(this).css('border-image-source');
		      frameWidth( GLOBAL_INFO.originalHeight, GLOBAL_INFO.photoHeight, GLOBAL_INFO.url);
	  		  matsWidth(GLOBAL_INFO.originalHeight, GLOBAL_INFO.photoHeight, GLOBAL_INFO.matsWidth);
			setImage(GLOBAL_INFO.photoHeight);
			info(GLOBAL_INFO.originalWidth, GLOBAL_INFO.originalHeight, GLOBAL_INFO.url, GLOBAL_INFO.matsWidth);
		});

	  $('#mats-width').click(function(){
	  	var mats = +$('#mats-width').val();
	  	GLOBAL_INFO.matsWidth = mats;
	  	
	  	matsWidth(GLOBAL_INFO.originalHeight, GLOBAL_INFO.photoHeight, GLOBAL_INFO.matsWidth);
		setImage(GLOBAL_INFO.photoHeight);
		info(GLOBAL_INFO.originalWidth, GLOBAL_INFO.originalHeight, GLOBAL_INFO.url, GLOBAL_INFO.matsWidth);
	  });

	  $('#zoom-in').click(function(){
	  		GLOBAL_INFO.photoHeight +=15;
			setImage(GLOBAL_INFO.photoHeight);
		    frameWidth( GLOBAL_INFO.originalHeight, GLOBAL_INFO.photoHeight, GLOBAL_INFO.url);
	  		matsWidth(GLOBAL_INFO.originalHeight, GLOBAL_INFO.photoHeight, GLOBAL_INFO.matsWidth);
	  });
	  $('#zoom-out').click(function(){
	  		GLOBAL_INFO.photoHeight = GLOBAL_INFO.photoHeight-15 >50 ? GLOBAL_INFO.photoHeight-15 : GLOBAL_INFO.photoHeight;
			setImage(GLOBAL_INFO.photoHeight);
		    frameWidth( GLOBAL_INFO.originalHeight, GLOBAL_INFO.photoHeight, GLOBAL_INFO.url);
	  		matsWidth(GLOBAL_INFO.originalHeight, GLOBAL_INFO.photoHeight, GLOBAL_INFO.matsWidth);
	  });

	  $("#matColor").spectrum({
      flat: true,
      showInput: true,
      className:"mat-colors",
      preferredFormat: "rgb",
      showPalette: true,
      showPaletteOnly: true,
      change: function(color){
      	$("#image-window img#originalImage").css({"background-color":color.toHexString()});
		document.querySelector('#mats_color [type=color]').value = color.toHexString();
      },
      palette: [   
       ["#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"],
       ["#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"],
       ["#f4cccc","#fce5cd","#fff2cc","#d9ead3","#d0e0e3","#cfe2f3","#d9d2e9","#ead1dc"],
       ["#ea9999","#f9cb9c","#ffe599","#b6d7a8","#a2c4c9","#9fc5e8","#b4a7d6","#d5a6bd"],
       ["#e06666","#f6b26b","#ffd966","#93c47d","#76a5af","#6fa8dc","#8e7cc3","#c27ba0"],
       ["#c00","#e69138","#f1c232","#6aa84f","#45818e","#3d85c6","#674ea7","#a64d79"],
       ["#900","#b45f06","#bf9000","#38761d","#134f5c","#0b5394","#351c75","#741b47"],
       ["#600","#783f04","#7f6000","#274e13","#0c343d","#073763","#20124d","#4c1130"]
    ]
    });

	  $("#wallColor").spectrum({
      flat: true,
      showInput: true,
      showAlpha: true,
      className: "wall-colors",
      preferredFormat: "rgb",
      showPalette: true,
      showPaletteOnly: true,
      change: function(color){
      	$("#app-window").css({"background-color":color.toHexString()});
      },
      palette: [   
       ["#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"],
       ["#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"],
       ["#f4cccc","#fce5cd","#fff2cc","#d9ead3","#d0e0e3","#cfe2f3","#d9d2e9","#ead1dc"],
       ["#ea9999","#f9cb9c","#ffe599","#b6d7a8","#a2c4c9","#9fc5e8","#b4a7d6","#d5a6bd"],
       ["#e06666","#f6b26b","#ffd966","#93c47d","#76a5af","#6fa8dc","#8e7cc3","#c27ba0"],
       ["#c00","#e69138","#f1c232","#6aa84f","#45818e","#3d85c6","#674ea7","#a64d79"],
       ["#900","#b45f06","#bf9000","#38761d","#134f5c","#0b5394","#351c75","#741b47"],
       ["#600","#783f04","#7f6000","#274e13","#0c343d","#073763","#20124d","#4c1130"]
    ]
    });

	$('#roomViewButton').click(function(){
		setTimeout(function(){
			GLOBAL_INFO.modalWidth = $('#wall').width();
			addModalIndex( "#wall-index",wallData);

			//--- the fame canvas code ---//
			html2canvas($('#appFrame'), {
				onrendered: function(canvas) {
	                // theCanvas = canvas;
	                $('#frameCanvas').append(canvas);

	                // var screenshot = canvas.toDataURL("image/png");
      				// document.getElementById("frameCanvas").setAttribute("src", screenshot);
            	}
			})
			var canvas = new fabric.Canvas('roomViewCanvas');
			canvasWindow.call(document.querySelector('.wall-thumbnail.active div img'), canvas);
		

			$('.wall-thumbnail div img').click(function() {
			      $(".wall-thumbnail.active").removeClass("active");
			      $(this).parent().parent().addClass('active');
			      canvasWindow.call(this, canvas);
			  });
		}, 1000);

	});

});

/*--room view function---*/
function canvasWindow(canvas){

	canvas.clear().renderAll();
	/*canvas.setBackgroundImage(this.src,canvas.renderAll.bind(canvas), {
    backgroundImageOpacity: 1,
    backgroundImageStretch: true
	});*/
	var ratio = this.naturalWidth/this.naturalHeight;
	var height = this.naturalHeight;

	canvas.remove(imgInstance);


	var imgInstance = new fabric.Image(this, {
	   left: 10,
	   top: 10,
	  // angle: 30,
	  height:$('#wall').height() - 20,
	  width: $('#wall').height()*ratio - 20, 
	  opacity: 0.85
	});


	canvas.setWidth($('#wall').height()*ratio);
	canvas.setHeight($('#wall').height());

	// console.log('canvas width :'+Math.round(canvas.getWidth()));

	var leftPadding = (GLOBAL_INFO.modalWidth - Math.round(canvas.getWidth()))/2;

	// console.log('PADDING width :'+$('#wall').width());


	$('#wall').css({'padding-left': leftPadding });

	canvas.add(imgInstance);

	canvas.item(0).hasBorder = canvas.item(0).hasCorner = canvas.item(0).hasControle = canvas.item(0).selectable = canvas.item(0).lockRotation = false;
}

function addIndex (selector, frameData) {
	var divStr = "";

	frameData.forEach(function(d, i){
		divStr += "<div class=\"fram-thumbnail col-md-2 col-sm-2\" style=\"border-image-source: url(http://mithun.visionads.com.au/otw/public/web/photo_frames/"+d+")\"></div>";
	});

	$(selector).append(divStr);

	$('.fram-thumbnail:first').addClass("active");

}

function addModalIndex (selector, frameData) {
	var divStr = "";
	$(selector).empty();
	frameData.forEach(function(d, i){
		divStr += "<div class=\"wall-thumbnail col-md-2 col-sm-2\">";
		divStr += "<div>";
		divStr += "<img src=\"./images/room_view/"+d+"\">";
		divStr += "</div>";
		divStr += "</div>";
	});

	$(selector).append(divStr);

	$('.wall-thumbnail:first').addClass("active");

}

function initImgPosition(){
	var originalHeight = $('#image-window img#originalImage').height();
	var originalWidth = $('#image-window img#originalImage').width();
	GLOBAL_INFO.originalHeight = originalHeight;
	GLOBAL_INFO.originalWidth = originalWidth;

	document.querySelector('#mats_color [type=color]').value = "#ffffff";

	var appWindowHeight = $('#app-window').height(); 
	// var appWindowWidth = $('#app-window').width(); 
	var photoHeight = appWindowHeight* 0.5;
	var topMargin;

	// console.log('hiro:'+photoHeight);

	if(originalHeight < photoHeight){
		photoHeight = originalHeight;
	}
	// console.log('hiron:'+photoHeight);

	GLOBAL_INFO.photoHeight = photoHeight;
	GLOBAL_INFO.url = $('.fram-thumbnail.active').css('border-image-source');
	GLOBAL_INFO.matsWidth = 0;

	setImage(GLOBAL_INFO.photoHeight);
	frameWidth( GLOBAL_INFO.originalHeight, GLOBAL_INFO.photoHeight, GLOBAL_INFO.url);
	matsWidth(GLOBAL_INFO.originalHeight, GLOBAL_INFO.photoHeight, GLOBAL_INFO.mats);
	info(GLOBAL_INFO.originalWidth, GLOBAL_INFO.originalHeight, GLOBAL_INFO.url, GLOBAL_INFO.matsWidth);
}

function setImage(photoHeight){
	$("#image-window img#originalImage").height(photoHeight);
	var width = $("#image-window img#originalImage").outerWidth();
	$('#image-window img#imageString').outerWidth(width);
	$("#image-frame").height(photoHeight);
}


function matsWidth(oldHeight, newHeight, matsWidth){

	var appWindowHeight = $('#app-window').height(); 
	var appWindowWidth = $('#image-window').width(); 

	var ratio = newHeight/oldHeight;
	matsWidth = +cmToPixel(matsWidth);
	matsWidth = matsWidth.toFixed(2);

	var newMatsWidth = ratio*matsWidth;
	newMatsWidth = newMatsWidth.toFixed(2);

	$("#image-window img#originalImage").css({
		'padding' : newMatsWidth
	});

	var imgHeight = $('#image-window img#originalImage').outerHeight(); 
	var imgWidth = $('#image-window img#originalImage').outerWidth();
	var stringHeight = $('#imageString').height(); 

	var topMargin = (appWindowHeight - imgHeight)/2 - stringHeight; 
	var leftMargin = (appWindowWidth - imgWidth)/2;
	
	
	$("#image-window").css({
		'margin-top': topMargin<0 ? 0: topMargin,
		'margin-left': leftMargin<0 ? 0: leftMargin
		});
	return newMatsWidth;
}

function frameWidth(oldHeight, newHeight, url){
	// console.log(url);
	var frame_width = parseInt(url.split('/').pop().split('@').pop());
	// console.log(frame_width);
	var newFrameWidth = +cmToPixel(frame_width)*(newHeight/oldHeight) ;
	newFrameWidth = newFrameWidth.toFixed(2);

	$('#image-window img#originalImage').css({
		'border-width': newFrameWidth,
		'border-image-source': url
	});
	return newFrameWidth;
}

function info(width, height, url, mats){

	$('#photo_width').text(pixelToCM(width));
	$('#photo_height').text(pixelToCM(height));

	var frame_width = parseInt(url.split('/').pop().split('@').pop());
	console.log(+pixelToCM(width) + frame_width +mats);
	$("#frame_width").text((+pixelToCM(width) + frame_width +mats).toFixed(2));
	$('#frame_height').text((+pixelToCM(height) + frame_width + mats).toFixed(2));

	var frame_name = url.split('/').pop().split('.').shift();
	$('#frame_code').text(frame_name);
	$('#mats_width').text(mats);
	// $('#mats_color').text('color');
}

