@extends('back.layouts.dashboard')
@section('title','Add Place')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection

@section('content')

    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Add a Place!</h1>
                            </div>
                            <form class="user" action="{{route('admin_places_store')}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Category</label>
                                    <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                                        <option value="0">Select Category</option>
                                        @foreach($places_list as $rs)
                                            <option value="{{$rs->id}}">{{$rs->title}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input type="text" class="form-control" name="title" id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Slug</label>
                                    <input type="text" class="form-control" name="slug" id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Keywords</label>
                                    <input type="text" class="form-control" name="keywords"
                                           id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Description</label>
                                    <input type="text" class="form-control" name="description"
                                           id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Details</label>
                                    <textarea id="summernote" name="details" value="details"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Image</label>
                                    <input type="file" class="form-control" name="image" id="exampleFormControlInput1">
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="100" alt=""/>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Country</label>
                                    <input type="text" class="form-control" name="country"
                                           id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">City</label>
                                    <input type="text" class="form-control" name="city"
                                           id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Location</label>
                                    <input type="text" class="form-control" name="location"
                                           id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Status</label>
                                    <select class="form-control" name="status" id="exampleFormControlSelect1">
                                        <option>Select Status</option>
                                        <option value="True">True</option>
                                        <option value="False">False</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Place</button>
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
