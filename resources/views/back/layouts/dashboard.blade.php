<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="">

    <title>@yield('title')</title>


    <!-- Custom fonts for this template-->
    <link href="{{asset('back/assets/')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('back/assets/')}}/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="{{asset('back/assets/')}}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    @yield('styles')


</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    @include('back.layouts.sidebar')
    @include('back.layouts.header')
    @yield('content')
    @include('back.layouts.footer')

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


<!-- Bootstrap core JavaScript-->
<script src="{{asset('back/assets/')}}/vendor/jquery/jquery.min.js"></script>
<script src="{{asset('back/assets/')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('back/assets/')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('back/assets/')}}/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="{{asset('back/assets/')}}/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('back/assets/')}}/js/demo/chart-area-demo.js"></script>
<script src="{{asset('back/assets/')}}/js/demo/chart-pie-demo.js"></script>

<!-- Page level plugins -->
<script src="{{asset('back/assets/')}}/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('back/assets/')}}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('back/assets/')}}/js/demo/datatables-demo.js"></script>
@yield('scripts')

</body>

</html>
