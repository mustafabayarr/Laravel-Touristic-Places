@extends('front.layouts.master')
@section('title','Listing')
@section('content')
    <!-- Hero Start-->
    <div class="hero-area3 hero-overly2 d-flex align-items-center ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9">
                    <div class="hero-cap text-center pt-50 pb-20">
                        <h2>Our Listing</h2>
                    </div>
                    <form action="#" class="search-box search-box2">
                        <div class="input-form">
                            <input type="text" placeholder="What are you looking for?">
                        </div>
                        <div class="select-form">
                            <div class="select-itms">
                                <select name="select" id="select1">
                                    <option value="">All Catagories</option>
                                    <option value="">Hotel</option>
                                    <option value="">Night Life</option>
                                    <option value="">Culture Places</option>
                                    <option value="">Restaurant</option>
                                </select>
                            </div>
                        </div>
                        <!-- Search box -->
                        <div class="search-form">
                            <button href="#">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--Hero End -->
    <!-- listing Area Start -->
    <div class="listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!-- Left content -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="small-section-tittle2 mb-45">
                                <h4>Advanced Filter</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Job Category Listing start -->
                    <div class="category-listing mb-50">
                        <!-- single one -->
                        <div class="single-listing">
                            <!-- input -->
                            <div class="input-form">
                                <input type="text" placeholder="What are you finding?">
                            </div>
                            <!-- Select job items start -->
                            <div class="select-job-items1">
                                <select name="select1">
                                    <option value="">Choose categories</option>
                                    <option value="">Hotel</option>
                                    <option value="">Night Life</option>
                                    <option value="">Culture Places</option>
                                    <option value="">Restaurant</option>
                                </select>
                            </div>
                            <!--  Select job items End-->
                            <!-- Select job items start -->
                            <div class="select-job-items2">
                                <select name="select2">
                                    <option value="">Location</option>
                                    <option value="">Dhaka</option>
                                    <option value="">Mirpur</option>
                                    <option value="">Dannondi</option>
                                </select>
                            </div>
                            <!--  Select job items End-->
                        </div>

                        <div class="single-listing">

                            <!-- Range Slider End -->
                            <a href="#" class="btn list-btn mt-20">Reset</a>
                        </div>
                    </div>
                    <!-- Job Category Listing End -->
                </div>
                <!-- Right content -->
                <div class="col-xl-8 col-lg-8 col-md-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="count mb-35">
                                <span>5432 Listings are available</span>
                            </div>
                        </div>
                    </div>
                    <!-- listing Details Stat-->
                    <div class="listing-details-area">
                        <div class="container">
                            <div class="row">
                                @foreach($datalist as $rs)
                                <div class="col-lg-6 ">
                                    <div class="single-listing mb-30">
                                        <div class="list-img">
                                            <img src="{{Storage::url($rs->image)}}" height="160px" alt="">
                                            <!-- <span>Open</span> -->
                                        </div>
                                        <div class="list-caption">
                                            <span>Open</span>
                                            <h3><a href="{{route('listing_details',['id' => $rs->id])}}">{{$rs->title}}</a></h3>
                                            <p>{{$rs->city}} {{$rs->country}}</p>
                                            <div class="list-footer">
                                                <ul>
                                                    <li>+10 278 367 9823</li>
                                                    <li>{{$rs->location}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- listing Details End -->
                    <!--Pagination Start  -->
                    <div class="pagination-area pt-70 text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="single-wrap d-flex justify-content-center">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-start">
                                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                                <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Pagination End  -->
                </div>
            </div>
        </div>
    </div>
    <!-- listing-area Area End -->

@endsection
