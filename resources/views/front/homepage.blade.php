@extends('front.layouts.master')
@section('title',$settings->title)
@section('keywords'){{$settings->keywords}}@endsection
@section('description'){{$settings->description}}@endsection
@section('content')
    <!-- Hero Area Start-->
    <div class="slider-area hero-overly">
        <div class="single-slider hero-overly  slider-height d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-9">
                        <!-- Hero Caption -->
                        <div class="hero__caption">
                            <span>Explore the city</span>
                            <h1>Discover Great Places</h1>
                        </div>
                        <form action="#" class="search-box">
                            @include('front.widgets._searchBoxWidget')
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--Hero Area End-->
    @include('front.widgets._popularLocationsWidget')
    @include('front.widgets._servicesAreaWidget')
    @include('front.widgets._categoriesAreaWidget')
    @include('front.widgets._peopleVisitWidget')
    @include('front.widgets._clientSayWidget')

    <!-- Blog Ara Start -->
    <div class="home-blog-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Our blog</span>
                        <h2>News and tips</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{asset('front/')}}/assets/img/gallery/home_blog1.png" alt="">
                        </div>
                        <div class="team-caption">
                            <span>HEALTH & CARE</span>
                            <h3><a href="blog.html">The Best SPA Salons For
                                    Your Relaxation</a></h3>
                            <p>October 6, 2020by Steve</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{asset('front/')}}/assets/img/gallery/home_blog2.png" alt="">
                        </div>
                        <div class="team-caption">
                            <span>HEALTH & CARE</span>
                            <h3><a href="blog.html">The Best SPA Salons For
                                    Your Relaxation</a></h3>
                            <p>October 6, 2020by Steve</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="{{asset('front/')}}/assets/img/gallery/home_blog3.png" alt="">
                        </div>
                        <div class="team-caption">
                            <span>HEALTH & CARE</span>
                            <h3><a href="blog.html">The Best SPA Salons For
                                    Your Relaxation</a></h3>
                            <p>October 6, 2020by Steve</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Ara End -->
@endsection
