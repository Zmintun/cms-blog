<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS-->
    <!-- Custom fonts for this template-->
    <!-- Page level plugin CSS-->
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/admin-all.css') }}" rel="stylesheet">

</head>

<body id="page-top">

@include('includes.admin-navbar')

<div id="wrapper">

    <!-- Sidebar -->
    @include('includes.admin-sidebar')

    <div id="content-wrapper">

        <div class="container-fluid">

            @yield('content')

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        @include('includes.admin-footer')

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<!-- Core plugin JavaScript-->
<!-- Custom scripts for all pages-->
<script src="{{ asset('js/admin-all.js') }}"></script>

</body>

</html>
