@extends('front.layouts.master')
@section('title','About Us - ' . $settings->title)
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
            <div class="col-lg-12 col-md-12">
                {!! $settings->aboutus !!}
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
