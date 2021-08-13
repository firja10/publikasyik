@extends('admin.template.app')


@section('button')





@endsection


@section('content')




    <!-- Area Chart -->
    <div class="col-xl-6 col-lg-5">

        <h1>EDIT {{$eksekutif->nama_kelas}} </h1>


            <form action = "{{route('daftar-eksekutif.update', $eksekutif->id)}}" method = "POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
              <div class="form-group">
                <label for="nama_kelas" class="col-form-label"> Nama Kelas : </label>
                <input type="text" class="form-control" id="nama_kelas" name = "nama_kelas" placeholder="{{$eksekutif->nama_kelas}}" value = "{{$eksekutif->nama_kelas}}">
              </div>
              <div class="form-group">
                <label for="deskripsi_kelas" class="col-form-label">Deskripsi Kelas :</label>
                <textarea class="form-control" id="deskripsi_kelas" name = "deskripsi_kelas" placeholder="{{$eksekutif->deskripsi_kelas}}" value = "{{$eksekutif->deskripsi_kelas}}">{{$eksekutif->deskripsi_kelas}}</textarea>
              </div>

              <div class="form-group">
                <label for="materi_kelas" class="col-form-label"> Materi Kelas : </label>
                <input type="text" class="form-control" id="materi_kelas" name = "materi_kelas" placeholder="{{$eksekutif->materi_kelas}}" value = "{{$eksekutif->materi_kelas}}">
              </div>

              <div class="form-group">
                <label for="harga_kelas" class="col-form-label"> Harga Kelas : </label>
                <input type="text" class="form-control" id="harga_kelas" name = "harga_kelas" placeholder="{{$eksekutif->harga_kelas}}" value = "{{$eksekutif->harga_kelas}}">
              </div>

              <div class="form-group">
                <label for="gambar_kelas" class="col-form-label"> Poster Kelas : </label>
                <input type="file" class="form-control" id="gambar_kelas" name = "gambar_kelas" placeholder="{{$eksekutif->gambar_kelas}}" value = "{{$eksekutif->gambar_kelas}}">
              </div>




              <div class="form-group">
                <label for="link_grup_diskusi" class="col-form-label"> Link Grup Diskusi : </label>
                <input type="text" class="form-control" id="link_grup_diskusi" name = "link_grup_diskusi" placeholder="{{$eksekutif->link_grup_diskusi}}" value = "{{$eksekutif->link_grup_diskusi}}">
              </div>

              <div class="form-group">
                <label for="tanggal_mulai" class="col-form-label"> Tanggal Mulai : </label>
                <input type="date" class="form-control" id="tanggal_mulai" name = "tanggal_mulai" placeholder="{{$eksekutif->tanggal_mulai}}" value = "{{$eksekutif->tanggal_mulai}}">
              </div>

              <div class="form-group">
                <label for="tanggal_akhir" class="col-form-label"> Tanggal Berakhir : </label>
                <input type="date" class="form-control" id="tanggal_akhir" name = "tanggal_akhir" placeholder="{{$eksekutif->tanggal_akhir}}" value = "{{$eksekutif->tanggal_akhir}}">
              </div>

              <div class="form-group">
                <label for="mentor" class="col-form-label"> Mentor : </label>
                <input type="text" class="form-control" id="mentor" name = "mentor" placeholder="{{$eksekutif->mentor}}" value = "{{$eksekutif->mentor}}">
              </div>

              <div class="form-group">
                <label for="sertifikat" class="col-form-label"> Sertifikat : </label>
                <input type="text" class="form-control" id="sertifikat" name = "sertifikat" placeholder="{{$eksekutif->sertifikat}}" value = "{{$eksekutif->sertifikat}}">
              </div>

              <center>

              <button class="btn btn-primary" type = "submit" name = "submit">Submit</button>
            </center>
            </form>









    </div>



@endsection
