<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        @yield('title')
    </title>

    {{-- <title>SB Admin 2 - Dashboard</title> --}}
        <!-- Favicons -->
        <link href="{{asset('startup-unpad/publikasyik.png')}}" rel="icon" />
        <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon" />

                {{-- Tambahan Bootstrap --}}

                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

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
                Dashboard Admin
            </div>

             <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{url('/admin/dashboard')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePojok"
                    aria-expanded="true" aria-controls="collapsePojok">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Daftar Pojok</span>
                </a>
                <div id="collapsePojok" class="collapse" aria-labelledby="headingPojok" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar Pojok:</h6>
                        <a class="collapse-item" href="{{url('/admin/daftar-paper')}}">
                            <i class="fas fa-fw fa fa-calendar"></i>
                            <span>Daftar Call of Papers</span></a>

                        <a class="collapse-item" href="{{url('/admin/daftar-jurnal')}}">
                                <i class="fas fa-fw fa-book"></i>
                                <span>Daftar Jurnal</span></a>

                            <a class="collapse-item" href="{{url('/admin/daftar-seminar')}}">
                                <i class="fas fa-fw fa-camera"></i>
                                <span>Daftar Seminar</span></a>

                    </div>
                </div>
            </li>

          <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Produk
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduk"
                    aria-expanded="true" aria-controls="collapseProduk">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Produk Kita</span>
                </a>
                <div id="collapseProduk" class="collapse" aria-labelledby="headingProduk"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar Produk :</h6>

                            <a class="collapse-item" href="{{url('/admin/daftar-eksekutif')}}">
                                <i class="fas fa-fw fa-university"></i>
                                <span>Daftar Kelas Eksekutif</span></a>

                            <a class="collapse-item" href="{{url('/admin/daftar-festival')}}">
                                <i class="fas fa-fw fa-gift"></i>
                                <span>Festival Publikasyik</span></a>


                            <a class="collapse-item" href="{{url('/admin/daftar-ppt')}}">
                                <i class="fas fa-fw fa-trophy"></i>
                                <span>Daftar PPT</span></a>

                    </div>
                </div>
            </li>




            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBahanajar"
                    aria-expanded="true" aria-controls="collapseBahanajar">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Bahan Ajar</span>
                </a>
                <div id="collapseBahanajar" class="collapse" aria-labelledby="headingBahanajar"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Bahan Ajar Kita:</h6>

                            <a class="collapse-item" href="{{url('/admin/daftar-langganan')}}">
                                <i class="fas fa-fw fa-money-bill-alt"></i>
                                <span>Daftar Langganan</span></a>

                            <a class="collapse-item" href="{{url('/admin/daftar-materi')}}">
                                <i class="fas fa-fw fa-book"></i>
                                <span>Daftar Materi</span></a>

                            <a class="collapse-item" href="{{url('/admin/daftar-submateri')}}">
                                <i class="fas fa-fw fa-book-open"></i>
                                <span>Daftar SubMateri</span></a>


                    </div>
                </div>
            </li>



            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLangganan"
                    aria-expanded="true" aria-controls="collapseLangganan">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Pelanggan Kita</span>
                </a>
                <div id="collapseLangganan" class="collapse" aria-labelledby="headingLangganan"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar Pelanggan :</h6>

                            <a class="collapse-item" href="{{url('/admin/daftar-langganan')}}">
                                <i class="fas fa-fw fa-university"></i>
                                <span>Langganan Kelas</span></a>

                            <a class="collapse-item" href="{{url('/admin/daftar-peserta-festival')}}">
                                <i class="fas fa-fw fa-gift"></i>
                                <span>Peserta Festival</span></a>


                            <a class="collapse-item" href="{{url('/admin/daftar-pesan')}}">
                                <i class="fas fa-fw fa-envelope"></i>
                                <span>Daftar Pesan</span></a>

                    </div>
                </div>
            </li>



















            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Halaman Common
            </div>


        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="{{url('/home')}}">
                <i class="fas fa-fw fa-home"></i>
                <span>Beranda</span></a>
        </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/daftar-user')}}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Daftar User</span></a>
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
                <nav class="navbar navbar-expand navbar-danger bg-danger topbar mb-4 static-top shadow">

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
                                <span class="mr-2 d-none d-lg-inline text-white-600 small" style = "color:white;">{{Auth::user()->name}}</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
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
                                </a>
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
                    {{-- <div class="row"> --}}



                        @yield('content')








                    {{-- </div> --}}

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-warning">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span style = "color:#AD3221;">Copyright &copy; <strong>PUBLIKASYIK</strong> 2021</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Mencoba Keluar Dari Halaman Admin ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" jika anda akan keluar</div>
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


    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

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
