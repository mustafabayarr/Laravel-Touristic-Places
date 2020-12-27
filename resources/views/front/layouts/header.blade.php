<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="{{asset('front/')}}/site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/')}}/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/slicknav.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/slick.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{asset('front/')}}/assets/css/style.css">
</head>

<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('front/')}}/assets/img/logo/loder.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="{{route('homepage')}}"><img src="{{asset('front/')}}/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route('homepage')}}">Home</a></li>
                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li><a href="{{route('categories')}}">Catagories</a></li>
                                        <li><a href="{{route('listing')}}">Listing</a></li>
                                        <li><a href="#">Page</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                                <li><a href="{{route('listing_details')}}">Listing details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                        <li class="add-list"><a href="{{route('listing_details')}}"><i class="ti-plus"></i> add Listing</a></li>
                                        <li class="login"><a href="#">
                                                <i class="ti-user"></i> Sign in or Register</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
