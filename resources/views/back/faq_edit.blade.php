@extends('back.layouts.dashboard')
@section('title','Edit FAQ')
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
                            @include('front.sendmessage')
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit a FAQ!</h1>
                            </div>
                            <form class="user" action="{{route('admin_faq_update',['id' =>$data->id])}}"
                                  method="POST">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Position</label>
                                    <input type="text" class="form-control" name="position" value="{{$data->position}}"
                                           id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Question</label>
                                    <input type="text" class="form-control" name="question" value="{{$data->question}}"
                                           id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Answer</label>
                                        <textarea id="summernote" name="answer">{{$data->answer}}</textarea>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Status</label>
                                    <select class="form-control" name="status" id="exampleFormControlSelect1">
                                        <option>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update FAQ</button>
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

