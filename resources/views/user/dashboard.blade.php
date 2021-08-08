@extends('user.template.app')
{{-- @extends('template.template') --}}

@section('title')

Dashboard

@endsection

@section('style')

<style>

#dashboard a {
    background-color: white;
}

#dashboard a span {
    color: #AD3221;
}

#dashboard a i{
    color: #AD3221;
}


</style>


@endsection






@section('content')

<br>
<br>
<br>
<br>



<div class="container-fluid">
    <div class="section-title">
        <h2>Dashboard</h2>
    </div>
    <br>


      <div class="row">



                    <!-- Earnings (Monthly) Card Example -->
                    {{-- <div class="col-xl-3 col-md-6 mb-4"> --}}
                     <div class="col-lg-4 mb-3">
                        <div class="card shadow h-100 py-2" style = "color:white; background-color:	#df4759;">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                           Jumlah Kelas Yang Anda Ikuti</div>
                                        <div class="h5 mb-0 font-weight-bold text-warning-800 text-warning">0</div>
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
                        <div class="card shadow h-100 py-2" style = "color:white; background-color:	#0275d8;">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-white text-uppercase mb-1">
                                          Jumlah Kelas Baru saat ini</div>
                                        <div class="h5 mb-0 font-weight-bold text-white-800">0</div>
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
                                              Jumlah Tagihan Pembayaran Anda</div>
                                            <div class="h5 mb-0 font-weight-bold text-white-800">0</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-money-check fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-danger">Jadwal Terdekat Anda</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                      <h5></h5>
                    </div>
                    <p></p>
                </div>
            </div>

        </div>



    </div>




    <div class="row">



    </div>












</div>



    <br><br><br>




  <!-- End Services Section -->








@endsection

