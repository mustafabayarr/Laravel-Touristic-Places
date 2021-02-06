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
        <h1 class="h3 mb-4 text-gray-800">Review Update</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            @include('front.sendmessage')
            <form class="user" action="{{route('admin_review_update',['id' => $data->id])}}" method="POST">
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
                                <td>{{$data->user->name}}</td>
                            </tr>
                            <tr>
                                <th>Place</th>
                                <td>{{$data->places->title}}</td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td>{{$data->subject}}</td>
                            </tr>
                            <tr>
                                <th>Review</th>
                                <td>{{$data->review}}</td>
                            </tr>
                            <tr>
                                <th>IP</th>
                                <td>{{$data->IP}}</td>
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>{{$data->created_at}}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                <select class="form-control" name="status" id="exampleFormControlSelect1">
                                    <option>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                                </td>
                            </tr>
                           <tr>
                                <td>

                                </td>
                                <td>
                                    <button type="submit" class="btn btn-primary">Update Message</button>
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

