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





   <!-- Area Chart -->
   <div class="col-xl-6 col-lg-5">

        <form action = "{{route('pemesananstore')}}" method = "POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            {{-- <label for="nama_kelas" class="col-form-label"> Nama Kelas : </label> --}}
            <input type="hidden" class="form-control" id="nama_kelas" name = "nama_kelas" placeholder="{{$eksekutif->nama_kelas}}" value = "{{$eksekutif->nama_kelas}}">

          </div>
          <div class="form-group">
            {{-- <label for="deskripsi_kelas" class="col-form-label">Deskripsi Kelas :</label> --}}
            {{-- <textarea class="form-control" id="deskripsi_kelas" name = "deskripsi_kelas" placeholder="{{$eksekutif->deskripsi_kelas}}" value = "{{$eksekutif->deskripsi_kelas}}">{{$eksekutif->deskripsi_kelas}}</textarea> --}}
            <input type="hidden" class="form-control" id="deskripsi_kelas" name = "deskripsi_kelas" placeholder="{{$eksekutif->deskripsi_kelas}}" value = "{{$eksekutif->deskripsi_kelas}}">
        </div>

          <div class="form-group">
            {{-- <label for="materi_kelas" class="col-form-label"> Materi Kelas : </label> --}}
            <input type="hidden" class="form-control" id="materi_kelas" name = "materi_kelas" placeholder="{{$eksekutif->materi_kelas}}" value = "{{$eksekutif->materi_kelas}}">
          </div>

          <div class="form-group">
            {{-- <label for="harga_kelas" class="col-form-label"> Tanggal Kelas : </label> --}}
            <input type="hidden" class="form-control" id="harga_kelas" name = "harga_kelas" placeholder="{{$eksekutif->harga_kelas}}" value = "{{$eksekutif->harga_kelas}}">
          </div>

          <div class="form-group">
            <label for="metode_pembayaran">Metode Pembayaran</label>
            <select name="metode_pembayaran" id="metode_pembayaran" class = "form-control">
                  <option value = "BNI">BNI</option>
                  <option value = "Mandiri">Mandiri</option>
            </select>
          </div>

          <center>

          <button class="btn btn-primary" type = "submit" name = "submit">Submit</button>
        </center>
        </form>









</div>





















        <form action="{{route('pemesananstore')}}">
            @csrf

        </form>






    </div>

</div>

@endsection
