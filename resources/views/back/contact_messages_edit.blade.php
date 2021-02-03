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
        <h1 class="h3 mb-4 text-gray-800">Contact Messages</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            @include('front.sendmessage')
            <form class="user" action="{{route('admin_message_update',['id' => $data->id])}}" method="POST">
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
                                <th>Phone</th>
                                <td>{{$data->phone}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$data->email}}</td>
                            </tr>
                            <tr>
                                <th>Subject</th>
                                <td>{{$data->subject}}</td>
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td>{{$data->message}}</td>
                            </tr>
                            <tr>
                                <th>Admin Note</th>
                                <td>
                                    <div class="form-group">
                                        <textarea class="form-control" name="note" id="note"
                                                  rows="3">{{$data->note}}</textarea>
                                    </div>
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

