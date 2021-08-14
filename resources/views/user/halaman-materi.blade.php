@extends('user.template.app')

@section('title')

Halaman Kelas

@endsection


@section('style')

<style>

    /* #daftar-kelas-baru a {
        background-color: white;
    }

    #daftar-kelas-baru a span {
        color: #AD3221;
    }

    #daftar-kelas-baru a i{
        color: #AD3221;
    } */


    </style>

@endsection



@section('content')





    <div class="col-xl-12 col-lg-11" style = " padding-bottom:50px;">
        <div class="card shadow mb-6"  >
            {{-- <div
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
            </div> --}}
            <div class="card-body">
                {{-- <div class="chart-area"> --}}

                    {{-- <canvas id="myAreaChart"></canvas> --}}
                    <center><h1> {{$submateri->nama_submateri}} </h1></center>
                    <br>
                 <center>  <img src="{{asset('storage/Submateri/'.$submateri->gambar_submateri)}}" alt="Gambar Submateri" style = "width:20%;"></center>
                    <br>
                    <center> <p style = "margin-left:50px;margin-right:50px;">{{$submateri->penjelasan_submateri}}</p></center>

                   <p style = "margin-left:20px;"> <strong> Referensi Materi :<a href="{{$submateri->referensi_submateri}}"> {{$submateri->referensi_submateri}} </a></strong> </p>

                {{-- </div> --}}
                <br><br>
            </div>
        </div>
    </div>



    <br><br>




@endsection
