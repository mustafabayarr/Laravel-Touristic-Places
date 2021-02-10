@extends('back.layouts.dashboard')
@section('title','Edit User')


@section('content')
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit User!</h1>
                            </div>
                            <form class="user" action="{{route('admin_user_update',['id' =>$data->id])}}"
                                  method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$data->name}}"
                                           id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email</label>
                                    <input type="text" class="form-control" name="email" value="{{$data->email}}"
                                           id="exampleFormControlInput1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Image</label>
                                    <input type="file" class="form-control" name="image"
                                           id="exampleFormControlInput1">
                                    @if($data->profile_photo_path)
                                        <img src="{{Storage::url($data->profile_photo_path)}}" height="100" alt=""/>
                                    @endif
                                </div>

                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

