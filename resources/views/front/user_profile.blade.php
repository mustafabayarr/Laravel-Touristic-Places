@extends('front.layouts.master')
@section('title','User Profile')

@section('content')
    <!-- Hero Start-->
    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center pt-50">
                        <h2>User Panel</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero End -->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @include('profile.show')
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">My Account</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="{{route('my_account')}}" class="d-flex">
                                        <p>My Profile</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('my_reviews')}}" class="d-flex">
                                        <p>My Reviews</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('user_places')}}" class="d-flex">
                                        <p>My Places</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('admin_logout')}}" class="d-flex">
                                        <p>Logout</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

