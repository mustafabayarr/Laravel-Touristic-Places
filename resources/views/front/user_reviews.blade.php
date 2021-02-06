@extends('front.layouts.master')
@section('title','User Reviews')

@section('content')
    <!-- Hero Start-->
    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center pt-50">
                        <h2>My Reviews</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero End -->
    <div class="container box_1170">
        <div class="section-top-border">
            <h3 class="mb-30">My Reviews</h3>
            @include('front.sendmessage')
            <div class="progress-table-wrap">
                <div class="progress-table">
                    <div class="table-head">
                        <div class="serial">ID</div>
                        <div class="serial">Place</div>
                        <div class="serial">Subject</div>
                        <div class="serial">Review</div>
                        <div class="serial">Status</div>
                        <div class="serial">Date</div>
                        <div class="serial">Delete</div>
                    </div>
                    @foreach($datalist as $rs)
                        <div class="table-row">
                            <div class="serial">{{$rs->id}}</div>
                            <div class="serial">
                                <a href="{{route('listing_details',['id'=>$rs->places->id])}}" target="_blank" style="color:black;">
                                    {{$rs->places->title}}
                                </a>
                            </div>
                            <div class="serial">{{$rs->subject}}</div>
                            <div class="serial">{{$rs->review}}</div>
                            <div class="serial">{{$rs->status}}</div>
                            <div class="serial">{{$rs->created_at}}</div>
                            <div class="serial"><a href="{{route('reviews_destroy',['id'=>$rs->id])}}"
                                                   class="btn btn-danger btn-danger"
                                                   onclick="return confirm('Delete! Are you sure?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    <div class="table-head">
                        <div class="serial">ID</div>
                        <div class="serial">Place</div>
                        <div class="serial">Subject</div>
                        <div class="serial">Review</div>
                        <div class="serial">Status</div>
                        <div class="serial">Date</div>
                        <div class="serial">Delete</div>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
