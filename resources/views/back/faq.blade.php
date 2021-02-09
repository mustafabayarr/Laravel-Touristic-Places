@extends('back.layouts.dashboard')
@section('title','FAQ List')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">FAQ</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    @include('front.sendmessage')
                    <a href="{{route('admin_faq_create')}}" class="btn btn-info btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus-circle"></i>
                                        </span>
                        <span class="text">Add a FAQ</span>
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Position</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Status</th>
                                <th colspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->position}}</td>
                                    <td>{{$rs->question}}</td>
                                    <td>{!!$rs->answer!!}</td>
                                    <td>{{$rs->status}}</td>
                                    <td ><a href="{{route('admin_faq_edit',['id' => $rs->id])}}"
                                           class="btn btn-success btn-success">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('admin_faq_destroy',['id' => $rs->id])}}"
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
                                <th>Position</th>
                                <th>Question</th>
                                <th>Answer</th>
                                <th>Status</th>
                                <th colspan="2">Actions</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.container-fluid -->


@endsection

