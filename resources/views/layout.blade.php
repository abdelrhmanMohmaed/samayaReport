<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>@yield('title')</title>


    <link rel="icon" href="{{ asset('lines/img/download2.jpeg') }}" type="image/icon type">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('lines/css/css/fontawesome.all.css') }}">
    {{-- table&btn --}}
    <link rel="stylesheet" href="{{ asset('lines/css/table&btn/bs.css') }}">
    <link rel="stylesheet" href="{{ asset('lines/css/table&btn/dataTable.css') }}">
    <link rel="stylesheet" href="{{ asset('lines/css/table&btn/btn.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lines/css/css/adminlte.css') }}">

    <link rel="stylesheet" href="{{ asset('lines/css/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('lines/css/select2/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('lines/css/css/css.css') }}">

    <!-- Google Font: Source Sans Pro -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}
</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="https://www.methode.com/" class="brand-link" target="_blank">
                <i class="p-3 fab fa-battle-net "></i>
                {{-- fa-spin --}}
                <span class="brand-text font-weight-light">Methode Electronics</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                @auth
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            {{-- <img src="{{ asset('lines/img/download2.JPEG') }}" class="img-circle elevation-2"
                                alt="User Image"> --}}
                            {{-- @if (Auth::user()->role_id == 1)
                                <img src="{{ asset('lines/img/user/abdo.png') }}" class="img-circle elevation-2"
                                    alt="User Image">
                            @endif
                            @if (Auth::user()->role_id == 2)
                                <img src="{{ asset('lines/img/user/ahmed.jpg') }}" class="img-circle elevation-2"
                                    alt="User Image">
                            @endif
                            @if (Auth::user()->role_id == 3)
                                <img src="{{ asset('lines/img/user/aya.jpg') }}" class="img-circle elevation-2"
                                    alt="User Image">
                            @endif --}}

                        </div>

                        <div class="info">
                            <a href="/" class="d-block">{{ Auth::user()->name }}</a>
                        </div>

                    </div>
                @endauth

                @auth
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul id="nav" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                            data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-open">
                                <a id="sample-page" href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Scrap Pages
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                        <li class="nav-item">
                                            <a id="scrap-page" href="{{ url('/') }}" class="nav-link">
                                                <i class="nav-icon fas fa-list-alt"></i>
                                                <p>
                                                    Scrap Report
                                                </p>
                                            </a>
                                        </li>
                                    @endif

                                    <li class="nav-item">
                                        <a id="scrap-table" href="{{ url('/parts/show-table') }}" class="nav-link">
                                            <i class="nav-icon fas fa-table"></i>
                                            <p>
                                                Scrap Table
                                            </p>
                                        </a>
                                    </li>

                                    @if (Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                        <li class="nav-item">
                                            <a id="scrap-table" href="{{ url('/chart/show-chart') }}"
                                                class="nav-link">
                                                <i class="nav-icon fas fa-chart-pie"></i>
                                                <p>
                                                    Chart Page
                                                </p>
                                            </a>
                                        </li>
                                    @endif
                                </ul>
                            </li>
                            @if (Auth::user()->role_id == 1)
                                <li class="nav-item has-treeview menu-open">
                                    <a id="sample-page" href="#" class="nav-link active">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>
                                            Dashboard
                                            <i class="right fas fa-angle-left"></i>
                                        </p>
                                    </a>

                                    <ul class="nav nav-treeview">

                                        <li class="nav-item">
                                            <a id="scrap-table" href="{{ url('/dashboard/Users') }}"
                                                class="nav-link">
                                                <i class="nav-icon fas  fa-user-cog"></i> 
                                                <p>
                                                    All Users
                                                </p>
                                            </a>
                                        </li>
                            @endif

                        </ul>
                        </li>
                        </ul>
                    </nav>
                @endauth
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        @yield('main')


        <div id="loading" class="text-center"> 
            <div class="lds-ripple">
                <div class="h-25 w-25 bg-blue"></div>
                <div class="bg-blue"></div>
            </div>
        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->

            <!-- Default to the left -->
            <strong>Created by AbdelRahmanMohamed &copy; 2020-2021 </strong>

        </footer>
        {{-- form logOut hidden --}}

        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    {{-- table&btn --}}
    <!-- jQuery -->
    <script src="{{ asset('lines/js/js/jquery-3.5.1.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('lines/js/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('lines/js/table-Btn/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('lines/js/table-Btn/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('lines/js/table-Btn/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('lines/js/table-Btn/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('lines/js/table-Btn/pdfmake.min.js') }}"></script>
    {{-- <script src="{{ asset('lines/js/table-Btn/jszip.min.js') }}"></script> --}}

    {{-- script print --}}
    <script src="{{ asset('lines/js/table-Btn/vfs_fonts.js') }}"></script>
    {{-- script copy & csv & pdf --}}
    <script src="{{ asset('lines/js/table-Btn/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('lines/js/table-Btn/buttons.print.min.js') }}"></script>

    {{-- <script src="{{ asset('lines/js/table-Btn/buttons.colVis.min.js') }}"></script> --}}

    <!-- AdminLTE App -->
    <script src="{{ asset('lines/js/js/adminlte.js') }}"></script>
    {{-- script select2 --}}
    <script src="{{ asset('lines/js/select2/select2.js') }}"></script>
    {{-- script chart --}}
    <script src="{{ asset('lines/js/js/chart-canvas.js') }}"></script>
    {{-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> --}}
    <script src="{{ asset('lines/js/js/index.js') }}"></script>

    @yield('script')

</body>

</html>
