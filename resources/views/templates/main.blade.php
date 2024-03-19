<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Blank Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/select2/css/select2.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte') }}/dist/css/adminlte.min.css">
    @stack('styles')
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        @include('templates.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('templates.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('content-header')

            <!-- Main content -->
            @yield('main-content')
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('templates.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('adminlte') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte') }}/dist/js/adminlte.min.js"></script>
    <!-- Select2 -->
    <script src="{{ asset('adminlte') }}/plugins/select2/js/select2.full.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    {{-- <script src="{{ asset('adminlte') }}/dist/js/demo.js"></script> --}}
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()
        })
    </script>
    @stack('scripts')
</body>

</html>
