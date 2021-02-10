<!-- Custom fonts for this template-->
<link href="{{asset('back/assets/')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{asset('back/assets/')}}/css/sb-admin-2.min.css" rel="stylesheet">
<!-- Custom styles for this page -->
<link href="{{asset('back/assets/')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Edit User</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            @include('front.sendmessage')
            <form class="user" action="{{route('admin_user_update',['id' => $data->id])}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <td>{{$data->id}}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{$data->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$data->email}}</td>
                            </tr>

                            <tr>
                                <th>Roles</th>
                                <td>
                                    <table>
                                        @foreach($data->roles as $row)
                                            <tr>
                                                <td>{{$row->name}}</td>
                                                <td>
                                                    <a href="{{route('admin_user_role_delete',['userid'=>$data->id,'roleid'=>$row->id])}}"
                                                       onclick="return !window.open(this.href,'','top=50,left=100,width=1100,height=700')"
                                                    >
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </td>
                            </tr>

                            </thead>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

