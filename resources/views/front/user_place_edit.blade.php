@extends('front.layouts.master')
@section('title','User Places')
@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection

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
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit a Place!</h1>
                            </div>
                            <form class="user" action="{{route('user_places_update',['id' =>$place->id])}}"
                                  method="POST">
                                @csrf
                                <div class="form-group">

                                    <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                                        @foreach($place_list as $rs)
                                            <option value="{{$rs->id}}"
                                                    @if($rs->id == $place->category_id) selected="selected" @endif>
                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$place->title}}"
                                           id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Slug</label>
                                    <input type="text" class="form-control" name="slug" value="{{$place->slug}}"
                                           id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Keywords</label>
                                    <input type="text" class="form-control" name="keywords"
                                           value="{{$place->keywords}}" id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Description</label>
                                    <input type="text" class="form-control" name="description"
                                           value="{{$place->description}}" id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Details</label>
                                        <textarea id="summernote" name="details">{{$place->details}}</textarea>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Image</label>
                                    <input type="file" class="form-control" name="image"
                                           id="exampleFormControlInput1">
                                    <img src="{{Storage::url($place->image)}}" height="100" alt=""/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Country</label>
                                    <input type="text" class="form-control" name="country" value="{{$place->country}}"
                                           id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">City</label>
                                    <input type="text" class="form-control" name="city" value="{{$place->city}}"
                                           id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Location</label>
                                    <input type="text" class="form-control" name="location"
                                           value="{{$place->location}}" id="exampleFormControlInput1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Status</label>
                                    <select class="form-control" name="status" id="exampleFormControlSelect1">
                                        <option>{{$place->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Place</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello Bootstrap 4',
            tabsize: 2,
            height: 100
        });
    </script>
@endsection

