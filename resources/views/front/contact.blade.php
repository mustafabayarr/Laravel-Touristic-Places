@extends('front.layouts.master')
@section('title','Contact - '. $settings->title)
@section('content')
    <!-- Hero Start-->
    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center pt-50">
                        <h2>Contact Us</h2>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!--Hero End -->
    <section class="contact-section">
        <div class="container">
    <div class="row">
        <div class="col-md-6">
            {!! $settings->contact !!}
        </div>
        <div class="col-md-6">

        </div>
    </div>
        </div>
    </section>


@endsection
