<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="author" content="Delspace">
    <!-- description -->
    <meta name="description" content="Delspace">
    <!-- keywords -->
    <meta name="keywords" content="">
    <!-- title -->
    <title>Delspace</title>
    <!-- favicon -->
    <link rel="icon" href="{{asset('img/logo.png')}}">
    <!-- animation -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}"/>
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}"/>
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.min.css')}}"/>
    <!-- cube Portfolio -->
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}"/>
    <!-- revolution slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('revolution/css/navigation.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('revolution/css/settings.css')}}"/>
    <!-- owl carousel -->
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{asset('css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <!-- Swiper CSS File -->
    <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
    <!-- component.css push nav-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/component.css')}}"/>
    <!-- bundle css -->
    <link rel="stylesheet" href="{{asset('css/core.css')}}"/>
    <!-- style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
    <!-- Custom Style -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}"/>


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90" class="side-nav" style="background:;">

<div id="loader">
<div class='loader'></div>
</div>

<!-- start header -->
<header class="center-logo-header">
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-fixed-top header-light bg-transparent nav-box-width nav-white-list menu-logo-center on no-full">
        <div class="container nav-header-container">
            <div class="row">
                <!-- start logo -->
                <div class="center-logo">
                    <a href="#home" title="Logo" class="logo scroll"><img src="{{asset('img/logo.png')}}" style="max-height: 100px" class="logo-dark" alt="finza"><img src="{{asset('img/logo.png')}}" style="max-height: 100px" alt="Delspace" class="logo-light default"></a>
                </div>
                <!-- end logo -->
                <div class="col-md-12 col-sm-12 col-xs-12 accordion-menu">
                    <button type="button" class="navbar-toggle collapsed pull-right display-none" aria-hidden="true">
                    </button>
                    <div class="navbar-collapse collapse no-padding-right">
                        <ul class="nav navbar-nav navbar-left text-right no-margin alt-font text-normal width-40 sm-width-100 sm-text-left hidden-sm hidden-xs" data-in="fadeIn" data-out="fadeOut">
                            <li class="active">
                                <a href="/" class="">Home</a>
                            </li>
                            <li>
                                <a href="/about" class="">About</a>
                            </li>
                            <li>
                                <a href="#" class="">Services</a>
                            </li>
                            {{-- <li>
                                <a href="#" class="scroll">Work</a>
                            </li> --}}
                        </ul>
                        <ul class="nav navbar-nav navbar-right no-margin alt-font text-normal width-40 sm-width-100 hidden-sm hidden-xs" data-in="fadeIn" data-out="fadeOut">
                            <li>
                                <a href="#" class="scroll">Events</a>
                            </li>
                            <li>
                                <a href="#">Conferences</a>
                            </li>
                            <li>
                                <a href="#blog" class="scroll">News</a>
                            </li>
                            <li>
                                <a href="#contact" class="scroll" >Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->

    <!-- side nav -->
    <div id="menu_bars" class="right menu_bars">
        <span class="t1"></span>
        <span class="t2"></span>
        <span class="t3"></span>
    </div>
    <div class="sidebar_menu">
        <nav class="pushmenu pushmenu-right bg-dark">
            <a class="push-logo" href="#."><img src="{{asset('img/logo.png')}}" alt="logo" style="max-height:100px"></a>
            <ul class="push_nav centered">
                <li class="clearfix">
                    <a href="#home" class="scroll"><span>01.</span>Home</a>

                </li>

                <li class="clearfix">
                    <a href="#about" class="scroll"> <span>02.</span>About</a>

                </li>
                <li class="clearfix">
                    <a href="#features" class="scroll"> <span>03.</span>Services</a>

                </li>
                <li class="clearfix">
                    <a href="#work" class="scroll"> <span>04.</span>Events</a>

                </li>

                <li class="clearfix">
                    <a href="#price" class="scroll"> <span>05.</span>Conference</a>

                </li>
                <li class="clearfix">
                    <a href="#blog" class="scroll"> <span>06.</span>News</a>

                </li>
                <li class="clearfix">
                    <a href="#contact" class="scroll"> <span>07.</span>Contact</a>

                </li>

            </ul>
            <div class="medium-icon side-nav-social-icon list-inline">
                <a class="facebook-bg-hvr" href="#."><i class="fa fa-facebook" aria-hidden="true"></i></a>

                <a class="twitter-bg-hvr" href="#."><i class="fa fa-twitter" aria-hidden="true"></i></a>

                <a class="pinterest-bg-hvr" href="#."><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>

                <a class="google-bg-hvr" href="#."><i class="fa fa-google" aria-hidden="true"></i></a>
            </div>
        </nav>
    </div>
    <!-- side nav end -->
</header>

@yield('content')

<footer class="padding-40px-tb bg-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="text-small text-white xs-text-center xs-margin-15px-bottom">© <?php echo date("Y") ?> Made By
                    <a href="#." class="text-white">Centrifold</a></div>
            </div>
            <div class="col-sm-5 no-padding">
                <div class="text-small footer-nav text-white">
                    <a href="#home" class="scroll text-white">Home</a>
                    <span class="verticle-line"></span>
                    <a href="#features" class="scroll text-white">Services</a>
                    <span class="verticle-line"></span>
                    <a href="#about" class="scroll text-white">About</a>
                    <span class="verticle-line"></span>
                    <a href="#work" class="scroll text-white">Events</a>
                    <span class="verticle-line"></span>
                    {{-- <a href="#price" class="scroll text-white">Pricing</a>
                    <span class="verticle-line"></span> --}}
                    <a href="#blog" class="scroll text-white">News</a>
                    <span class="verticle-line"></span>
                    <a href="#contact" class="scroll text-white">Contact</a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-social text-right xs-text-center xs-margin-10px-top">
                    <a href="#." class="facebook-text-hvr"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#." class="twitter-text-hvr"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#." class="pinterest-text-hvr"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    <a href="#." class="instagram-text-hvr"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#." class="google-text-hvr"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end-->

<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="fa fa-angle-up"></i></a>
<!-- end scroll to top  -->


<!-- javascript libraries -->
<script src="{{asset('js/jquery-3.2.1.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.appear.min.js')}}"></script>
<!-- owl carousel -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- magnific popup -->
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<!-- flip -->
<script src="{{asset('js/jquery.flip.min.js')}}"></script>
<!-- fancybox -->
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<!-- Swiper Core Javascript -->
<script src="{{asset('js/swiper.min.js')}}"></script>
<!-- Morphext js -->
<script src="{{asset('js/morphext.min.js')}}"></script>
<!-- wow -->
<script src="{{asset('js/wow.js')}}"></script>
<!-- parallax -->
<script src="{{asset('js/parallaxie.min.js')}}"></script>
<!-- particles -->
<script src="{{asset('js/particles.min.js')}}"></script>
<!-- isotope.pkgd.min js -->
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>
<!-- revolution -->
<script src="{{asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLICEY ADD-ON FILES -->
<script  src="{{asset('revolution/js/revolution.addon.slicey.min.js')}}"></script>
<!-- revolution extension -->
<script src="{{asset('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<!-- Google Map Api -->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyAOBKD6V47-g_3opmidcmFapb3kSNAR70U"></script>
<script src="{{asset('js/map.js')}}"></script>
<!-- setting -->
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
