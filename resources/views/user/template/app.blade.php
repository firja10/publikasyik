<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    {{-- <title>SB Admin 2 - Dashboard</title> --}}
        <!-- Favicons -->
        <link href="{{asset('startup-unpad/publikasyik.png')}}" rel="icon" />
        <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon" />

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

    @yield('style')


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        {{-- <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar" > --}}

        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style = "background-color: #AD3221;" >



            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    {{-- <i class="fas fa-laugh-wink"></i> --}}
                    <img src="{{asset('startup-unpad/publikasyik.png')}}" alt="" style = "width:50px;">
                </div>
                <div class="sidebar-brand-text mx-3">Publikasyik</div>
            </a>

            <!-- Divider -->
            {{-- <hr class="sidebar-divider my-0"> --}}





            <!-- Divider -->
            <hr class="sidebar-divider">



            <!-- Heading -->
            <div class="sidebar-heading">
                Halaman User
            </div>
            <br>


            <!-- Nav Item - Dashboard -->
            <li class="nav-item" id = "dashboard">
                <a class="nav-link" href="{{url('/user/dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item" id = "riwayat-kelas">
                <a class="nav-link" href="{{url('/user/riwayat-kelas')}}">
                    <i class="fas fa-fw fa fa-calendar"></i>
                    <span>Riwayat Kelas</span></a>
            </li>


             <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item" id = "daftar-kelas-baru" >
                <a class="nav-link" href="{{url('/user/daftar-kelas-baru')}}">
                    <i class="fas fa-fw fa fa-university"></i>
                    <span>Daftar Kelas Baru</span></a>
            </li>

            <li class="nav-item" id = "riwayat-festival" >
                <a class="nav-link" href="{{url('/user/riwayat-festival')}}">
                    <i class="fas fa-fw fa fa-birthday-cake"></i>
                    <span>Riwayat Festival</span></a>
            </li>

            <li class="nav-item" id = "daftar-festival-baru" >
                <a class="nav-link" href="{{url('/user/daftar-festival-baru')}}">
                    <i class="fas fa-fw fa fa-glass-martini"></i>
                    <span>Daftar Festival Baru</span></a>
            </li>


             <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item" id = "tagihan-anda" >
                <a class="nav-link" href="{{url('/user/tagihan-anda')}}">
                    <i class="fas fa-fw fa fa-money-check"></i>
                    <span>Tagihan Anda</span></a>
            </li>







            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Halaman Common
            </div>

            <br>


        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('/home')}}">
                <i class="fas fa-fw fa-home"></i>
                <span>Beranda</span></a>
        </li>

               <!-- Nav Item - Tables -->
               <li class="nav-item">
                <a class="nav-link" href="{{url('/pojok')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Pojok Publikasyik</span></a>
            </li>





            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}"

                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">



















            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-warning bg-warning topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    {{-- <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-danger" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> --}}

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        {{-- <div class="topbar-divider d-none d-sm-block"></div> --}}

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-dark-600 small text-dark"> <strong>{{Auth::user()->name}}
                                <i class = "fas fa-caret-down"></i>

                                </strong> </span>
                                {{-- <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg"> --}}
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">


                        @yield('judul')

                            @yield('button')
                                {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                    </div>

                    <!-- Content Row -->
                    <div class="row">



                        @yield('content')








                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-dark">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span style = "color:white">Copyright &copy; Publikasyik <?php echo date('Y'); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Mencoba Keluar dari Halaman User ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Silakan klik "Logout" jika anda ingin keluar</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
                    <a class="btn btn-danger" href="{{route('logout')}}"

                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"

                    >Logout</a>
                </div>
            </div>
        </div>
    </div>



    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>
