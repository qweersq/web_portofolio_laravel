<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Portofolio</title>


    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anek+Tamil:wght@400;500;700&family=PT+Serif:wght@400;700&family=Poppins:wght@400;500;700&display=swap"
        rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/sidebar.css') }}">

    <link rel="icon" href="{{ asset('assets/img/hadadicon.png') }}">



    <!-- REQUIRED SCRIPTS -->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <!-- jQuery -->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{ asset('AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>

    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>


    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/sliceEvent.css') }}">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="{{ asset('assets/img/hadadicon.png') }}" alt="AquaponicLogo"
                height="60" width="60">
        </div>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-style">
            <!-- Brand Logo -->
            <div class="brand-link" style="display: flex;">
                <img src="{{ asset('assets/img/hadadicon.png') }}" alt="Hadad Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <a href="/" style="color:white; text-decoration:none;margin-left:10px; ">Admin Portofolio</a>
            </div>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2" id="sidebarUpdate">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dasbor
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/skill" class="nav-link">
                                <i class="nav-icon fas fa-gear"></i>
                                <p>
                                    Skill
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/education" class="nav-link">
                                <i class="nav-icon fas fa-school"></i>
                                <p>
                                    Education
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/experience" class="nav-link">
                                <i class="nav-icon fas fa-person"></i>
                                <p>
                                    Experience
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/portofolio" class="nav-link">
                                <i class="nav-icon fas fa-square-poll-horizontal"></i>
                                <p>
                                    Portofolio
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/certificate" class="nav-link">
                                <i class="nav-icon fas fa-certificate"></i>
                                <p>
                                    Certificate
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/contact" class="nav-link">
                                <i class="nav-icon fas fa-envelope"></i>
                                <p>
                                    Contact Me
                                </p>
                            </a>
                        </li>

                    </ul>
                    <div id="profile-container" class="navbar-nav">
                        <div class="nav-item nav-link navlink2" style="display:flex;" style="color: white">

                            <i class="far fa-user" style=" color: white; margin-left: 20px "></i>
                            <a href="{{ route('index') }}" style="color: white; margin-left:10px;">asdfasdf</a>

                            <a href="http://localhost:8000"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-right-from-bracket"
                                    style="color: white; position: absolute; right:20px;"></i>
                            </a>
                            <form id="logout-form" action="#" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>

                    </div>
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
                    <div class="row mb-2">
                        <div class="col-sm-6" style="display: flex;">
                            <a class="nav-link" data-widget="pushmenu" href="/" role="button"
                                style="color:black;margin-left:5px;"><i class="nav-icon fas fa-bars"></i>
                                <a id="changejudul" class="m-0 judulll">Dasbor</a>
                            </a>

                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; Hadad.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0.0
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- DataTables  & Plugins -->
    <script src="{{ asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

</body>

</html>
