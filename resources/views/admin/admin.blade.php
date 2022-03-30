<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>


    <link rel="stylesheet"
          href="{{asset('/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')}}">

    <link rel="stylesheet" href="{{asset('/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/plugins/fontawesome-free/css/all.min.css')}}">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60"
             width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('main')}}" class="nav-link">Home</a>
            </li>


        </ul>


    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Panel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-5 mb-3 d-flex">
                <div class="dropdown mb-5 pb-3">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>

                    <div class="dropdown-menu bg-light  mt-3" aria-labelledby="dropdownMenuButton">
                        <a id="log-out" class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">

                            {{ __('Logout') }}
                        </a>


                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            {{ method_field('POST') }}
                            @csrf
                        </form>

                    </div>

                </div>

            </div>

            <!-- SidebarSearch Form -->

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">


                    <li class="nav-item" id="header-li">
                        <a href="{{route('admin.header')}}" class="nav-link">
                            <i class="nav-icon fas fa-solid fa-4"></i>
                            <p>
                                Header

                            </p>
                        </a>
                    </li>
                    <li class="nav-item" id="main-slider-li">
                        <a href="{{route('admin.slider')}}" class="nav-link">

                            <i class="nav-icon fas fa-calculator-alt"></i>
                            <p>
                                Main Slider
                            </p>
                        </a>
                    </li>
                    <li class="nav-item" id="our-mission-li">
                        <a href="{{route('admin.ourmission')}}" class="nav-link">

                            <i class="nav-icon fas fa-calculator-alt"></i>
                            <p>
                                Our Mission
                            </p>
                        </a>
                    </li>
                    <li class="nav-item" id="news-press-li">
                        <a href="{{route('admin.newspress')}}" class="nav-link">

                            <i class="nav-icon fas fa-calculator-alt"></i>
                            <p>
                                News & Press
                            </p>
                        </a>
                    </li>
                    <li class="nav-item" id="projects-li">
                        <a href="{{route('admin.services')}}" class="nav-link">

                            <i class="nav-icon fas fa-calculator-alt"></i>
                            <p>
                                Services
                            </p>
                        </a>
                    </li>
                    <li class="nav-item" id="projects-li">
                        <a href="{{route('admin.project')}}" class="nav-link">

                            <i class="nav-icon fas fa-calculator-alt"></i>
                            <p>
                                Projects
                            </p>
                        </a>
                    </li>
                    <li class="nav-item" id="form-li">
                        <a href="{{route('admin.form')}}" class="nav-link">

                            <i class="nav-icon fas fa-calculator-alt"></i>
                            <p>
                                Form
                            </p>
                        </a>
                    </li>
                    <li class="nav-item" id="footer-li">
                        <a href="{{route('admin.footer')}}" class="nav-link">

                            <i class="nav-icon fas fa-calculator-alt"></i>
                            <p>
                                Footer
                            </p>
                        </a>
                    </li>


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">

                @yield('current-block')

            </div>
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

            </div><!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a></strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>
</div>

<script src="{{asset('/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<script src="{{asset('/dist/js/adminlte.js')}}"></script>
{{--<script src="{{asset('https://code.jquery.com/jquery-3.5.1.slim.min.js')}}"--}}
{{--        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"--}}
{{--        crossorigin="anonymous"></script>--}}
<!-- PAGE PLUGINS -->
{{--<!-- jQuery Mapael -->--}}

<script src="{{asset('/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
{{--<!-- ChartJS -->--}}
<script src="{{asset('/plugins/chart.js/Chart.min.js')}}"></script>

{{--<!-- AdminLTE for demo purposes -->--}}
{{--<script src="{{asset('/dist/js/demo.js')}}"></script>--}}
{{--<!-- AdminLTE dashboard demo (This is only for demo purposes) -->--}}
{{--<script src="{{asset('/dist/js/pages/dashboard2.js')}}"></script>--}}
<script src="{{asset('/js/slick.min.js')}}"></script>
<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>
