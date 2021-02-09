@extends('front.layouts.master')
@section('title','FAQ - ' . $settings->title)
@section('content')
    <!-- Hero Start-->
    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center pt-50">
                        <h2>FAQ</h2>
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
                    <div id="accordion">
                    @foreach($datalist as $rs)
                            <h3>{{$rs->question}}</h3>
                            <div>
                                <p>{!! $rs->answer !!}</p>
                            </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Details End -->

    @include('front.widgets._peopleVisitWidget')
    @include('front.widgets._clientSayWidget')
    @include('front.widgets._servicesAreaWidget')
@endsection
