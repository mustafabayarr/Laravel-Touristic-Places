@extends('front.layouts.master')
@section('title','About Us')
@section('content')
<!-- Hero Start-->
<div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>About us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Hero End -->
<!-- About Details Start -->
<div class="about-details section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10">
                <!-- Section Tittle -->
                <div class="section-tittle section-tittle5 mb-80">
                    <span>About our company</span>
                    <h2>Making sure that our products exceed expectations
                        for quality, style and performance.</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-4">
                <h3>Our Mission</h3>
                <p>Brook presents your services with flexible nienti and multipurpose layouts. You can select vorite layouts & elements for particular projects with unlimited mizationi possibilities.</p>
            </div>
            <div class="col-lg-5">
                <h3>Plan Overview</h3>
                <p>Brook presents your services with flexible nienti and multipurpose layouts. You can select vorite layouts & elements for particular projects with unlimited mizationi possibilities.</p>
            </div>
        </div>
    </div>
</div>
<!-- About Details End -->

@include('front.widgets._peopleVisitWidget')
@include('front.widgets._clientSayWidget')
@include('front.widgets._servicesAreaWidget')
@include('front.widgets._popularLocationsWidget')
@endsection
