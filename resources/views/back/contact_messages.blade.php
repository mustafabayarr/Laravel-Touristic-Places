@extends('back.layouts.dashboard')
@section('title','Contact Messages')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Contact Messages</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="table-responsive">
                        @include('front.sendmessage')
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Admin Note</th>
                                <th colspan="3">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs->phone}}</td>
                                    <td>{{$rs->email}}</td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->message}}</td>
                                    <td>{{$rs->note}}</td>
                                    <td>{{$rs->status}}</td>

                                    <td><a href="{{route('admin_message_edit',['id' => $rs->id])}}"
                                           onclick="return !window.open(this.href,'','top=50,left=100,width=1100,height=700')"
                                           class="btn btn-success btn-success">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('admin_message_destroy',['id' => $rs->id])}}"
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
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Admin Note</th>
                                <th colspan="3">Actions</th>
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

