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
                <label for="harga_kelas" class="col-form-label"> Tanggal Kelas : </label>
                <input type="text" class="form-control" id="harga_kelas" name = "harga_kelas" placeholder="{{$eksekutif->harga_kelas}}" value = "{{$eksekutif->harga_kelas}}">
              </div>

              <div class="form-group">
                <label for="gambar_kelas" class="col-form-label"> Poster Kelas : </label>
                <input type="file" class="form-control" id="gambar_kelas" name = "gambar_kelas" placeholder="{{$eksekutif->gambar_kelas}}" value = "{{$eksekutif->gambar_kelas}}">
              </div>

              <center>

              <button class="btn btn-primary" type = "submit" name = "submit">Submit</button>
            </center>
            </form>









    </div>



@endsection
