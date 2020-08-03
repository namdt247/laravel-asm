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
<<<<<<< HEAD
<div class="wrapper">
    <nav class="main-header navbar navbar-expand border-bottom-0 navbar-dark navbar-gray">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle title_user" data-toggle="dropdown">
                    <img src="{{asset('Admin/dist/img/avatar.png')}}" class="user-image" alt="Admin">
                    <span class="text-white">Admin</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="user-header">
                        <img src="{{asset('Admin/dist/img/avatar.png')}}" class="img-circle" alt="Admin">
                        <p>Admin - Quản trị</p>
                    </li>
                    <li class="user-footer" style="background-color: #6c757d;">
                        <div class="float-left">
                            <a type="button" href="#" class="btn btn-outline-light">Hồ sơ</a>
                        </div>
                        <div class="float-right">
                            <a type="button" href="#" class="btn btn-outline-light">Đăng xuất</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4" id="aside-nav-left">
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('Admin/dist/img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">ADMIN</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column nav-compact text-sm nav-legacy" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Danh mục</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-list"></i>
                            <p>Sản phẩm</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-tag"></i>
                            <p>Bộ sưu tập</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-file"></i>
                            <p>Đơn hàng</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            </div>
        </section>
    </div>

    <aside class="control-sidebar control-sidebar-dark">

    </aside>
</div>

<script src="{{asset('Admin/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('Admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{asset('Admin/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('Admin/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('Admin/plugins/sparklines/sparkline.js')}}"></script>
<script src="{{asset('Admin/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<script src="{{asset('Admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('Admin/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script src="{{asset('Admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{asset('Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<script src="{{asset('Admin/dist/js/adminlte.min.js')}}"></script>
=======
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
>>>>>>> 35474baf2e5a3d69a772fdda5c4b18a4597b9d7c
</body>
</html>

