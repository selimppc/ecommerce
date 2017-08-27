<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png?v=kPPlxk2lY8">
    <meta name="theme-color" content="#e2e4ff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

    <meta name="csrf_token" content="e2555755-9d35-490a-9a83-abc401c5c629">

    <title>Custom Plain Mirrors & Framing | Off The Wall</title>

    <meta name="description" content="Plain mirrors cut to size and framed to your designs." />


    <link rel="stylesheet" href="{{ URL::asset('web/photo_frame/plain_mirror/static/css/bootstrap.min.css') }}" />
  
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('web/photo_frame/plain_mirror/static/css/frameshop-w.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('web/photo_frame/static/css/custom.css') }}">
   

    <script src="{{ URL::asset('web/photo_frame/plain_mirror/static/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ URL::asset('web/photo_frame/plain_mirror/static/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('web/photo_frame/plain_mirror/static/js/shoppingCart.min.js') }}"></script>
    


</head>

    <body>

        <div id="body-flex-wrapper" class="body-flex-wrapper-style">
       
            <div id="body-wrapper" class="container-fluid body-wrapper-style">

                <div class="header_container">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="logo_container">
                                <a href="{{URL::to('')}}">
                                    <img src="{{URL::to('')}}/web/images/logo.png">
                                </a>
                            </div>
                            <div class="hot_line">
                                <a href="tel:02-95672422">02-95672422</a>

                                <div class="header_address">
                                    425 Princess Highway<br/>ROCKDALE NSW 2216
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="row">
                            <div class="upper_section">
                                
                                <ul class="top_menu">
                                                           
                                    <li>
                                        <a href="{{URL::to('')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{URL::to('')}}/picture-framing-rockdale">Contact us</a>
                                    </li>
                                </ul>
                                <div class="my_bag_container">
                                    <a href="{{URL::to('')}}/mycart">
                                        <span class="text">Cart</span>
                                        <span class="wishlist_amount">(
                                            @if(Session::has('product_cart'))
                                                {{count(Session::get('product_cart'))}}
                                            @else
                                                0
                                            @endif
                                            )</span>
                                    </a>
                                </div>
                            </div>

                            
                        </div>
                    </div>

                </div>

                <div class="col-sm-11 col-sm-offset-1">
                    <div class="row">
                        <ul class="main-menu">
                            <li>
                                <a href="#">Custom Picture Framing</a>
                            </li>
                             <li>
                                <a class="active" href="#">Plain Mirror</a>
                            </li>
                            <!--<li>
                                <a href="#">Framed Plain Mirrors</a>
                            </li>
                            <li>
                                <a href="#">Photo Frame</a>
                            </li> -->
                        </ul>
                    </div>
                </div> 

                <div class="main-container">

                    <div class="col-xs-12 col-sm-10 col-sm-push-1 col-md-9 col-md-push-1">

                        <form name="userupload" action="frame-it-plain-mirror" method="post" onSubmit="return checkFormField(this);" enctype="multipart/form-data">

                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

                            <input type="hidden" name="file" value="Plain_Mirror">
                            <input type="hidden" name="url_action" id="url_action" value="" />
                            <input type="hidden" name="action" value="add">

                            <div class="col-sm-6">
                                <div id="plain-mirror-image" class="left-side-bar">

                                    <h1 class="main-title">Framed Plain Mirrors</h1>

                                    <h3 class="sub-heading">Custom cut mirrors, framed to fit any decor.</h3>
                                    
                                    <img style="width: 100%;" border="0" src="{{ URL::asset('web/photo_frame/plain_mirror/static/images/Plain-Mirror-2.jpg') }}" class="dropshadow">

                                </div>
                            </div>

                            <div class="col-sm-6">
                            <div class="right-side-bar">
                                <p>High quality 4mm plain mirrors, cleanly cut to size and professionally framed.</p>
                                <h3>Enter Mirror Size</h3>
                                <p style="width: 50%;float: left;">Width:
                                    <input style="    padding: 5px;" type="number" name="imgwidth" value="50" size="3" maxlength="5" step="0.1"> cm</p>
                                <p style="width: 50%;float: left;">Height:
                                    <input style="    padding: 5px;" type="number" name="imgheight" value="50" size="3" maxlength="5" step="0.1"> cm</p>
                                <div class="alert alert-danger" role="alert" id="dimension-alert" style="display:none;">
                                    <p>Sizes must be between:</p>
                                    <p> Min <b>10 x 10 cm</b> , Max <b>152 x 101.5 cm</b></p>
                                    <p>For larger sizes please <a rel="nofollow" href="/contact-us/"><b>contact
                                                us.</b></a></p>
                                </div>
                                <h3>Choose Your Frame</h3>
                                <p>Click on the 'Add a Frame' button to head to our online framing section. Choose your favourite frame to suit your decor.</p>
                                <button id="cart-button" type="image" onclick="addcartframe(this);" name="frameitImg" class="button fat-button add-to-cart-button">Add a Frame
                                </button>
                                <p align="center">
                                    <!-- BOF: Show Price -->
                                    <script type="text/javascript">
                                        $(document).ready(function() {

                                            $("[name=imgwidth]").on('input', function() {
                                                setTimeout('get_price();', 750);
                                                if (isValidSize()) {
                                                    $('#cart-button').prop('disabled', false);
                                                } else {
                                                    $('#cart-button').prop('disabled', 'disabled');
                                                }
                                            });

                                            $("[name=imgheight]").on('input', function() {
                                                setTimeout('get_price();', 750);
                                                if (isValidSize()) {
                                                    $('#cart-button').prop('disabled', false);
                                                } else {
                                                    $('#cart-button').prop('disabled', 'disabled');
                                                }
                                            });

                                            get_price();

                                        });

                                        function isValidSize() {
                                            var t = ((function isValidSize() {
                                                var w = $("[name=imgwidth]").val();
                                                var h = $("[name=imgheight]").val();
                                                return !(w < 10 || h < 10 || w > 152 || h > 152 || (w > 101.5 && h > 101.5));
                                            })());
                                            if (t) {
                                                $('#dimension-alert').fadeOut(150);
                                            } else {
                                                $('#dimension-alert').fadeIn(150);
                                            }
                                            return t;
                                        }

                                        function get_price() {

                                            w = $("[name=imgwidth]").val();
                                            h = $("[name=imgheight]").val();
                                            c = $("[name=userupload] > [name=file]").val();

                                            $("#errtr").remove();

                                            if (w < 10 || h < 10 || w > 183 || h > 183 || (w > 122 && h > 122)) {

                                                $("#price").html("N/A");

                                                $("#table10").children().append('<tr id="errtr"><td align="center" style="color:red;font-weight: bold;"><span id="error"></span></td></tr>');

                                                $("#error").html("Minimum size: 10x10 cm  Maximum size: 183x122 cm. <br /><br />");

                                                return;

                                            }

                                            /*$.get("static/json/gcp.txt?w=" + w + "&h=" + h + "&c=" + c, function (data) {
                                             $('#price').html(data);
                                             });*/

                                            /*This is only for testing purpose to show different prices. please comment it and uncomment above commented block*/
                                            $.getScript("static/json/gcp.js?w=" + w + "&h=" + h + "&c=" + c, function (data) {
                                                $('#price').html($item_price);
                                                $('#price_val').val($item_price);
                                                console.log(data);
                                            });

                                        }
                                    </script>

                                </p>
                                <input type="hidden" name="price_val" id="price_val">
                                <input type="hidden" name="initial_default_img" id="initial_default_img" value="{{ URL::asset('web/photo_frame/plain_mirror/static/images/Plain-Mirror-2.jpg') }}">
                                <span style="font-size: 22px;" id="label-total">Total Price: </span><span id="price" style="font-size: 22px;"></span>
                            </div>
                            <div style="margin-top: 30px;" class="right-side-bar">
                                <p>Customise your own decor with a cut to size framed mirror. Firstly choose a size, then simply 'Add a Frame'. You'll get a mirror professionally cut and framed to your designs. Please note that the price above does not include the frame, the cost of framing will vary based on your selection and will be instantly quoted to you in the next section.</p>
                                <p>Our mirrors are only available as <strong>framed</strong> mirrors when purchasing online. We can only provide unframed plain, polished or bevelled mirrors for delivery within the Sydney metro area, or as a pick-up order from our store. Please <a href="/contact-us/">contact us</a> for more information or for custom mirror requests.</p>
                            </div>
                        </div>

                            

                        </form>
                    </div>    

                </div>

                <div style="background-color: #2b2b2b;margin-top: -10px;" class="col-md-12">
                <div class="row">

                    <div class="footer_container">

                        <div class="col-md-3 col-sm-3 col-xs-3 row-left-0">
                            <div class="footer_logo">
                                <a href="{{URL::to('')}}">
                                    <img src="{{URL::to('')}}/web/images/footer_logo.png">
                                </a>
                            </div>
                        </div>

                        <div class="col-md-9 col-sm-9 col-xs-9">
                            <ul class="footer_menu">
                                <li>
                                    <a href="https://www.facebook.com/Off-the-wall-framing-PTY-Ltd-1180736021961295/" target="_blank"><img src="{{URL::to('')}}/images/facebook.png"></a>
                                    <a href="https://www.instagram.com/offthewallframing/" target="_blank"><img src="{{URL::to('')}}/images/instagram.png"></a>
                                    <a href="https://plus.google.com/u/0/109347086873122701317/about" target="_blank"><img src="{{URL::to('')}}/images/google-plus.png"></a>
                                </li>
                                <li>
                                    <a href="{{URL::to('')}}/about-us">About us</a>
                                </li>
                                
                                <li>
                                    <a href="{{URL::to('')}}/picture-framing-rockdale">Contact us</a>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <a class="developer_company" href="http://www.visionads.com.au/" rel="nofollow" target="_blank">Seo &amp; Website by VisionsAds</a>

                </div>
            </div>

            </div>

        </div>   


        <style type="text/css">
            .left-side-bar {
                background: #fff;
                padding: 15px;
            }
            .right-side-bar {
                background: #fff;
                padding: 15px;
            }
            h1,h3{
            font-size: 20px !important;
            padding: 0 !important;
            margin-bottom: 10px !important;
                width: 100%;
    display: inline-block;
            }

            h3{
                font-size: 16px !important;
                margin-bottom: 20px !important;
            }
        </style> 

    </body>

</html>