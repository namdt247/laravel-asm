<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('Admin/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('Admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/admin.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/plugins/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('Admin/plugins/bootstrap/css/bootstrap.min.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini text-sm">
    <div class="wrapper">

        @include('admin.include.header')

        @include('admin.include.main_sidebar')

        <div class="content-wrapper">
            <section class="content-header clearfix">
                @yield('main-header')
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('main-content')
            </section>
        </div>
        @include('admin.include.footer')
    </div>

    <script src="{{asset('Admin/plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Admin/plugins/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('Admin/plugins/sparklines/sparkline.js')}}"></script>
    <script src="{{asset('Admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <script src="{{asset('Admin/plugins/moment/moment.min.js')}}"></script>
    <script src="{{asset('Admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('Admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script src="{{asset('Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('Admin/dist/js/adminlte.min.js')}}"></script>

    @yield('main-script')
</body>
</html>

