<!DOCTYPE html>
<html>
    <head>
        <title>{{$title}} OFF THE WALL</title>

        <link href="{{ URL::asset('web/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all"/>
        <link href="{{ URL::asset('web/css/jquery.fancybox.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ URL::asset('web/css/camera.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ URL::asset('web/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        
        <script type="text/javascript" src="{{ URL::asset('web/scripts/jquery.min.js') }}"></script>
        <script type='text/javascript' src="{{ URL::asset('web/scripts/bootstrap.min.js') }}"></script> 
        <script type='text/javascript' src="{{ URL::asset('web/scripts/jquery.elevatezoom.js') }}"></script> 
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="main_container position-relative">
                    <div class="corners top_left"></div>
                    <div class="corners top_right"></div>
                    <div class="corners bottom_left"></div>
                    <div class="corners bottom_right"></div>
                    <div class="top_border"></div>
                    <div class="bottom_border"></div>
                    <div class="border-left"></div>
                    <div class="border-right"></div>

                    <div class="middle_container position-relative">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="header_container">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="row">
                                        <div class="logo_container">
                                            <a href="{{URL::to('')}}">
                                                <img src="{{URL::to('')}}/web/images/logo.png">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="row">
                                        <div class="upper_section">
                                            <div class="hot_line">
                                                02-95672422
                                            </div>
                                            <ul class="top_menu">
                                                                       
                                                <li>
                                                    <a href="{{URL::to('')}}/about-us">About us</a>
                                                </li>
                                                <li>
                                                    <a href="{{URL::to('')}}/contact-us">Contact us</a>
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

                                        <div class="header_address">
                                            <p>425 Princess Highway, Rockdale NSW 2216</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mobile-hotline">

                                    <div class="hot_line">
                                        02-95672422
                                    </div>

                                </div>

                                <div class="mobile-address">                                    
                                    <p>425 Princess Highway, Rockdale NSW 2216</p>
                                </div>

                            </div>
                        </div>

                        @yield('content')


                        <div class="col-md-12">

                            <div class="footer_container">

                                <div class="col-md-3 col-sm-3 col-xs-3 row-left-0">
                                    <div class="footer_logo">
                                        <a href="#">
                                            <img src="{{URL::to('')}}/web/images/footer_logo.png">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-md-9 col-sm-9 col-xs-9">
                                    <ul class="footer_menu">
                                        <li>
                                            <a href="{{URL::to('')}}/about-us">About us</a>
                                        </li>

                                        <li>
                                            <a href="{{URL::to('')}}/terms-and-conditions">Terms And Conditions</a>
                                        </li>

                                        <li>
                                            <a href="{{URL::to('')}}/privacy-security">Privacy & Security</a>
                                        </li>
                                        <!-- <li>
                                            <a href="{{URL::to('')}}/delivery-installation">Delivery & Installation</a>
                                        </li> -->
                                       <!--  <li>
                                            <a href="{{URL::to('')}}/wholesale-customers">Wholesale Customers</a>
                                        </li>
                                        <li>
                                            <a href="{{URL::to('')}}/splashbacks">Splashbacks</a>
                                        </li> -->
                                        <li>
                                            <a href="{{URL::to('')}}/contact-us">Contact us</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <a class="developer_company" href="http://www.visionads.com.au/" rel="nofollow" target="_blank">Seo &amp; Website by VisionsAds</a>

                        </div>


                    </div>

                </div>
            </div>
        </div>  
                                
                            