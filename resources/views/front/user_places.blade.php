@extends('front.layouts.master')
@section('title','User Places')

@section('content')
    <!-- Hero Start-->
    <div class="hero-area2  slider-height2 hero-overly2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center pt-50">
                        <h2>My Places</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Hero End -->
    <div class="container box_1170">

        <div class="section-top-border">
            <h3 class="mb-30">My Places</h3>
            @include('front.sendmessage')
            <div class="card-header py-3">
                <a href="{{route('user_places_create')}}" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus-circle"></i>
                                        </span>
                    <span class="text">Add a Place</span>
                </a>
            </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Gallery</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Status</th>
                    <th colspan="2">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($places_list as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                        <td>{{$rs->title}}</td>
                        <td>
                            @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" height="60" alt="image"/>
                            @endif
                        </td>
                        <td>
                            <div align="center">
                                <a href="{{route('user_image_create',['places_id' => $rs->id])}}"
                                   onclick="return !window.open(this.href,'','top=50,left=100,width=1100,height=700')"
                                   class="btn btn-info btn-success" >

                                    <i class="far fa-images"></i>
                                </a>
                            </div>
                        </td>
                        <td>{{$rs->country}}</td>
                        <td>{{$rs->city}}</td>
                        <td>{{$rs->status}}</td>
                        <td ><a href="{{route('user_places_edit',['id' => $rs->id])}}"
                                class="btn btn-success btn-success">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('user_places_destroy',['id' => $rs->id])}}"
                               class="btn btn-danger btn-danger"
                               onclick="return confirm('Delete! Are you sure?')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Gallery</th>
                    <th>Country</th>
                    <th>City</th>
                    <th>Status</th>
                    <th colspan="2">Actions</th>
                </tr>
                </tfoot>

            </table>
        </div>
    </div>

@endsection
