@extends('front.layouts.master')
@section('title',$datalist->title)
@section('content')
    <!-- Hero Start-->
    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center pt-50">
                        <h2>{{$datalist->title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero End -->
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{Storage::url($datalist->image)}}" alt="">
                        </div>
                        <div class="blog_details">
                            <h2>{{$datalist->description}}
                            </h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="fa fa-user"></i> {{Auth::user()->name}}</a></li>
                                <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                            </ul>
                            <p class="excert">
                                {!! $datalist->details !!}
                            </p>
                        </div>
                    </div>
                    <div class="navigation-top">
                        <div class="d-sm-flex justify-content-between text-center">
                            <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and
                                4
                                people like this</p>
                            <div class="col-sm-4 text-center my-2 my-sm-0">
                                <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                            </div>
                            <ul class="social-icons">
                                <li>
                                    @if($settings->facebook != null)<a href="https://www.facebook.com/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a>@endif
                                </li>
                                <li>
                                    @if($settings->twitter != null)<a href="https://www.twitter.com/" target="_blank"><i
                                            class="fab fa-twitter"></i></a>@endif
                                </li>
                                <li>
                                    @if($settings->instagram != null)<a href="https://www.instagram.com/"
                                                                        target="_blank"><i
                                            class="fab fa-instagram"></i></a>@endif
                                </li>
                                <li>
                                    @if($settings->youtube != null)<a href="https://www.youtube.com/" target="_blank"><i
                                            class="fab fa-youtube"></i></a>@endif
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="blog-author">
                        <div class="media align-items-center">
                            <img src="{{Auth::user()->profile_photo_url}}" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>{{Auth::user()->name}}</h4>
                                </a>
                                <p>Second divided from form fish beast made. Every of seas all gathered use saying
                                    you're, he
                                    our dominion twon Second divided from</p>
                            </div>
                        </div>
                    </div>
                    <div class="comments-area">
                        <h4>Comments</h4>
                        @foreach ($reviews as $rs)
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">

                                        <div class="thumb">
                                            <img src="{{Auth::user()->profile_photo_url}}" alt="">
                                        </div>
                                        <div class="desc">
                                            <p class="comment">
                                                {{$rs->review}}
                                            </p>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex align-items-center">
                                                    <h5>
                                                        <a href="#">{{$rs->user->name}}</a>
                                                    </h5>
                                                    <p class="date">{{$rs->created_at}} </p>
                                                </div>
                                                <div class="reply-btn">
                                                    <a href="#" class="btn-reply text-uppercase">{{$rs->subject}}</a>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        @livewire('review',['id' => $datalist->id])
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Category</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Hotel</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Night Life</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Culturel Places</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Restaurant</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Blog Area end =================-->
@endsection
