@extends('back.layouts.dashboard')
@section('title','Users')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">


        <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Users</h1>
            <!-- DataTales Example -->
            <div class="card shadow mb-4">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>

                                <th colspan="2">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($datalist as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>
                                        @if($rs->profile_photo_path)
                                            <img
                                                src="{{\Illuminate\Support\Facades\Storage::url($rs->profile_photo_path)}}"
                                                height="50"
                                                style="border-radius: 10px;"
                                            >
                                        @endif
                                    </td>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs->email}}</td>
                                    <td>
                                        @foreach($rs->roles as $row)
                                            {{$row->name}}
                                        @endforeach
                                        <a href="{{route('admin_user_roles',['id' => $rs->id])}}"
                                           onclick="return !window.open(this.href,'','top=50,left=100,width=1100,height=700')"
                                           class="btn btn-info btn-success" >
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </td>
                                    <td ><a href="{{route('admin_user_edit',['id' => $rs->id])}}"
                                            class="btn btn-success btn-success">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{route('admin_user_destroy',['id' => $rs->id])}}"
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
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
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

