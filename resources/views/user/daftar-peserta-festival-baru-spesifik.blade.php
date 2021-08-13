@extends('user.template.app')

@section('title')

Daftar Festival Baru

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
        <h2>Daftar Festival Baru</h2>
    </div>
    <br><br>
    <div class="row">





   <!-- Area Chart -->
   <div class="col-xl-6 col-lg-5">

        <form action = "{{route('daftarfestivaluserbayar')}}" method = "POST" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            {{-- <label for="nama_festival" class="col-form-label"> Nama Kelas : </label> --}}
            <input type="hidden" class="form-control" id="nama_festival" name = "nama_festival" placeholder="{{$festival->nama_festival}}" value = "{{$festival->nama_festival}}">

          </div>
          <div class="form-group">
            {{-- <label for="deskripsi_festival" class="col-form-label">Deskripsi Kelas :</label> --}}
            {{-- <textarea class="form-control" id="deskripsi_festival" name = "deskripsi_festival" placeholder="{{$festival->deskripsi_festival}}" value = "{{$festival->deskripsi_festival}}">{{$festival->deskripsi_festival}}</textarea> --}}
            <input type="hidden" class="form-control" id="deskripsi_festival" name = "deskripsi_festival" placeholder="{{$festival->deskripsi_festival}}" value = "{{$festival->deskripsi_festival}}">
        </div>

          <div class="form-group">
            {{-- <label for="materi_festival" class="col-form-label"> Materi Kelas : </label> --}}
            <input type="hidden" class="form-control" id="materi_festival" name = "materi_festival" placeholder="{{$festival->materi_festival}}" value = "{{$festival->materi_festival}}">
          </div>

          <div class="form-group">
            {{-- <label for="harga_festival" class="col-form-label"> Tanggal Kelas : </label> --}}
            <input type="hidden" class="form-control" id="harga_festival" name = "harga_festival" placeholder="{{$festival->harga_festival}}" value = "{{$festival->harga_festival}}">
          </div>


          <div class="form-group">
            {{-- <label for="harga_festival" class="col-form-label"> Tanggal Kelas : </label> --}}
            <input type="hidden" class="form-control" id="link_festival" name = "link_festival" placeholder="{{$festival->link_festival}}" value = "{{$festival->link_festival}}">
          </div>

          <div class="form-group">
            {{-- <label for="harga_festival" class="col-form-label"> Tanggal Kelas : </label> --}}
            <input type="hidden" class="form-control" id="tanggal_mulai" name = "tanggal_mulai" placeholder="{{$festival->tanggal_mulai}}" value = "{{$festival->tanggal_mulai}}">
          </div>

          <div class="form-group">
            {{-- <label for="harga_festival" class="col-form-label"> Tanggal Kelas : </label> --}}
            <input type="hidden" class="form-control" id="tanggal_berakhir" name = "tanggal_berakhir" placeholder="{{$festival->tanggal_berakhir}}" value = "{{$festival->tanggal_berakhir}}">
          </div>

          <div class="form-group">
            {{-- <label for="harga_festival" class="col-form-label"> Tanggal Kelas : </label> --}}
            <input type="hidden" class="form-control" id="gambar_festival" name = "gambar_festival" placeholder="{{$festival->gambar_festival}}" value = "{{$festival->gambar_festival}}">
          </div>
{{--
          <div class="form-group">

            <input type="hidden" class="form-control" id="sertifikat" name = "sertifikat" placeholder="{{$festival->sertifikat}}" value = "{{$festival->sertifikat}}">
          </div> --}}

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
