<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="{{asset('front/assets/')}}/site.webmanifest">
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
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
    <!--call categorylist function from HomeController-->
@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp
<!-- Header Start -->
    <div class="header-area header-transparent">
        <div class="main-header">
            <div class="header-bottom  header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="{{route('homepage')}}"><img src="{{asset('front/')}}/assets/img/logo/logo.png"
                                                                     alt=""></a>
                            </div>
                        </div>
                        @php
                            $parentCategories = \App\Http\Controllers\HomeController::categoryList()
                        @endphp
                        <div class="col-xl-10 col-lg-10 col-md-8">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{route('homepage')}}">Home</a></li>
                                        <li class="nav-item dropdown">
                                        <li><a class="nav-link dropdown-toggle"
                                               id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                               aria-expanded="false"
                                               href="{{route('categories')}}">Categories</a>

                                            <ul class="nav-item dropdown submenu">
                                                @foreach($parentCategories as $rs)
                                                    <li><a>{{$rs->title}}</a>
                                                        @if(count($rs->children))
                                                            @include('front.widgets._categoryTreeWidget',['children'=> $rs->children])
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>

                                        </li>

                                        <li><a href="{{route('listing')}}">Listing</a></li>
                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                        <li><a href="{{route('references')}}">References</a></li>
                                        <li><a href="{{route('faq')}}">FAQ</a></li>

                                        @auth
                                            <li class="login"><a href="{{route('login')}}">
                                                    <i class="ti-user"></i> {{Auth::user()->name}}</a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('my_account')}}">My Account</a></li>
                                                    <li><a href="{{route('my_reviews')}}">Reviews</a></li>
                                                    <li><a href="elements.html">Messages</a></li>
                                                    <li><a href="{{route('admin_logout')}}">Logout</a></li>
                                                </ul>
                                            </li>
                                        @endauth
                                        @guest
                                            <li class="login"><a href="{{route('login')}}">
                                                    <i class="ti-user"></i> Sign in or Register</a>
                                                <ul class="submenu">
                                                    <li><a href="{{route('my_account')}}">My Account</a></li>
                                                </ul>
                                            </li>
                                        @endguest


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
