@extends('back.layouts.dashboard')
@section('title','Edit Place')

@section('content')
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
                            <form class="user" action="{{route('admin_places_update',['id' => $place->id])}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Category</label>
                                    <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                                        @foreach($place_list as $rs)
                                            <option value="{{$rs->id}}" @if($rs->id == $place->category_id) selected="selected" @endif>{{$rs->title}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$place->title}}" id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Slug</label>
                                    <input type="text" class="form-control" name="slug" value="{{$place->slug}}" id="exampleFormControlInput1">
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
                                    <label for="exampleFormControlInput1">Details</label>
                                    <input type="text" class="form-control" name="details" value="{{$place->details}}" id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Image</label>
                                    <input type="text" class="form-control" name="image" value="{{$place->image}}" id="exampleFormControlInput1">
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
                                        <option value="{{$place->status}}"></option>
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

