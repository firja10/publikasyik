@extends('admin.template.app')




@section('title')
Dashboard - Admin

@endsection


@section('judul')


<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
@endsection





@section('content')









@section('content')






    {{-- <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Earnings Overview</h6>
                <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                        aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                </div>
            </div>
        </div>
    </div>

 --}}








    <div class="row">



        <!-- Earnings (Monthly) Card Example -->
        {{-- <div class="col-xl-3 col-md-6 mb-4"> --}}
         <div class="col-lg-4 mb-3">
            <div class="card shadow h-100 py-2" style = "color:white; background-color:	#0275d8;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                               Jumlah Peserta </div>
                            <div class="h5 mb-0 font-weight-bold text-white-800 text-white"><?php echo $pemesanan ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Earnings (Monthly) Card Example -->
        {{-- <div class="col-xl-3 col-md-6 mb-4"> --}}
        <div class="col-lg-4 mb-3">
            <div class="card shadow h-100 py-2" style = "color:white; background-color:	#df4759;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                              Jumlah Kelas Baru saat ini</div>
                            <div class="h5 mb-0 font-weight-bold text-white-800"><?php echo $eksekutif; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-university fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                            <!-- Earnings (Monthly) Card Example -->
        {{-- <div class="col-xl-3 col-md-6 mb-4"> --}}
            <div class="col-lg-4 mb-3">
                <div class="card shadow h-100 py-2" style = "color:white; background-color:	#28a745;">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                  Jumlah User</div>
                                <div class="h5 mb-0 font-weight-bold text-white-800"><?php echo $user; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



<div class="col-lg-6 mb-4">

    <div class="card shadow h-100 py-2" style = "color:white; background-color:	#f0ad4e;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                      Jumlah Festival</div>
                    <div class="h5 mb-0 font-weight-bold text-white-800"><?php echo $festival; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-gift fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>


</div>





<div class="col-lg-6 mb-4">

    <div class="card shadow h-100 py-2" style = "color:white; background-color:	#5bc0de;">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                      Jumlah Peserta Festival</div>
                    <div class="h5 mb-0 font-weight-bold text-white-800"><?php echo $daftarfestival; ?></div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-users fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>


</div>










</div>
















@endsection






