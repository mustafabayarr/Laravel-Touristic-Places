<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a Image!</title>
    <!-- Custom fonts for this template-->
    <link href="{{asset('back/assets/')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('back/assets/')}}/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="{{asset('back/assets/')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
   <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">{{$image->title}}</h1>
                            </div>
                            <form class="user" action="{{route('admin_image_store',['places_id' => $image->id])}}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Title</label>
                                    <input type="text" class="form-control" name="title" id="exampleFormControlInput1">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Image</label>
                                    <input type="file" class="form-control" name="image" id="exampleFormControlInput1">
                                </div>
                                <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Place</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Places</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th colspan="2">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($images_list as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->places_id}}</td>
                        <td>{{$rs->title}}</td>
                        <td>
                            @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" height="60" alt="image"/>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('admin_image_destroy',['id' => $rs->id,'places_id'=>$image->id])}}"
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
                    <th>Places</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th colspan="2">Actions</th>
                </tr>
                </tfoot>

            </table>
        </div>
    </div>
</body>
</html>
