@extends('user.template.app')

@section('title')

Daftar Kelas Baru

@endsection

@section('style')

<style>

    #daftar-kelas-baru a {
        background-color: white;
    }

    #daftar-kelas-baru a span {
        color: #AD3221;
    }

    #daftar-kelas-baru a i{
        color: #AD3221;
    }


    </style>

@endsection


@section('content')

<div class="container-fluid">
    <div class="section-title">
        <h2>Daftar Kelas Baru</h2>
    </div>
    <br><br>
    <div class="row">

        @foreach ( $eksekutif as $exe )


        <div class="col-lg-3 mb-2">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-danger" style="text-align: center;">{{$exe->nama_kelas}}</h4>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="{{asset('storage/Eksekutif/'.$exe->gambar_kelas)}}" alt="...">
                    </div>
                    <p> {{$exe->deskripsi_kelas}} </p>

                    <center>
                     <a href="{{route('daftarkelasbaruspesifik', $exe->id)}}" class="btn btn-success"> Daftar Kelas</a>
                    </center>

                </div>
            </div>

        </div>
        @endforeach

    </div>

</div>

@endsection
