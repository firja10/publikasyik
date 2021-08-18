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
        <h2>Metode Pembayaran untuk Kelas Baru</h2>
    </div>
    <br><br>
    <div class="row">

<div class="col-xl-12">
    <center>
    <div class="alert" style = "background-color: #AD3221; color:#ffff;"  role="alert">
        <br> <br>
            <h2><strong>Silakan Pilih Metode Pembayaran</strong></h2>
            <span> <strong>Pembayaran bisa dilakukan via : <br>
                437801014082532 BRI an Dita Amalia</strong>
            </span>
            <br><br>
      </div>
    </center>

</div>

<br>

   <!-- Area Chart -->
   <div class="col-xl-12 col-lg-5">

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
            {{-- <label for="harga_kelas" class="col-form-label"> Tanggal Kelas : </label> --}}
            <input type="hidden" class="form-control" id="link_grup_diskusi" name = "link_grup_diskusi" placeholder="{{$eksekutif->link_grup_diskusi}}" value = "{{$eksekutif->link_grup_diskusi}}">
          </div>

          <div class="form-group">
            {{-- <label for="harga_kelas" class="col-form-label"> Tanggal Kelas : </label> --}}
            <input type="hidden" class="form-control" id="tanggal_mulai" name = "tanggal_mulai" placeholder="{{$eksekutif->tanggal_mulai}}" value = "{{$eksekutif->tanggal_mulai}}">
          </div>

          <div class="form-group">
            {{-- <label for="harga_kelas" class="col-form-label"> Tanggal Kelas : </label> --}}
            <input type="hidden" class="form-control" id="tanggal_akhir" name = "tanggal_akhir" placeholder="{{$eksekutif->tanggal_akhir}}" value = "{{$eksekutif->tanggal_akhir}}">
          </div>

          <div class="form-group">
            {{-- <label for="harga_kelas" class="col-form-label"> Tanggal Kelas : </label> --}}
            <input type="hidden" class="form-control" id="mentor" name = "mentor" placeholder="{{$eksekutif->mentor}}" value = "{{$eksekutif->mentor}}">
          </div>

          <div class="form-group">
            {{-- <label for="harga_kelas" class="col-form-label"> Tanggal Kelas : </label> --}}
            <input type="hidden" class="form-control" id="sertifikat" name = "sertifikat" placeholder="{{$eksekutif->sertifikat}}" value = "{{$eksekutif->sertifikat}}">
          </div>


          <div class="form-group">
            {{-- <label for="harga_kelas" class="col-form-label"> Tanggal Kelas : </label> --}}
            <input type="hidden" class="form-control" id="diskon" name = "diskon" placeholder="{{$eksekutif->diskon}}" value = "{{$eksekutif->diskon}}">
          </div>

          <div class="form-group">
            {{-- <label for="harga_kelas" class="col-form-label"> Tanggal Kelas : </label> --}}
            <input type="hidden" class="form-control" id="kelas_id" name = "kelas_id" placeholder="{{$eksekutif->id}}" value = "{{$eksekutif->id}}">
          </div>

          <div class="form-group">
            <label for="metode_pembayaran"> <strong> Metode Pembayaran ( Untuk saat ini masih menggunakan BRI saja )</strong></label>
            <select name="metode_pembayaran" id="metode_pembayaran" class = "form-control">
                  <option value = "BNI">BRI</option>
                  <option value = "Mandiri" disabled>Mandiri</option>
                  <option value = "Dana" disabled>Dana</option>

            </select>
          </div>

          <center>

          <button class="btn btn-primary" type = "submit" name = "submit">Submit Metode Pembayaran</button>
        </center>
        </form>









</div>





















        <form action="{{route('pemesananstore')}}">
            @csrf

        </form>






    </div>

</div>

@endsection
