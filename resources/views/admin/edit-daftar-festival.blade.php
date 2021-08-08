@extends('admin.template.app')


@section('button')





@endsection


@section('content')




    <!-- Area Chart -->
    <div class="col-xl-6 col-lg-5">

        <h1>EDIT FESTIVAL {{$festival->nama_festival}} </h1>


            <form action = "{{route('daftar-festival.update', $festival->id)}}" method = "POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
              <div class="form-group">
                <label for="nama_festival" class="col-form-label"> Nama Festival : </label>
                <input type="text" class="form-control" id="nama_festival" name = "nama_festival" placeholder="{{$festival->nama_festival}}" value = "{{$festival->nama_festival}}">
              </div>
              <div class="form-group">
                <label for="deskripsi_festival" class="col-form-label">Deskripsi Festival :</label>
                <textarea class="form-control" id="deskripsi_festival" name = "deskripsi_festival" placeholder="{{$festival->deskripsi_festival}}" value = "{{$festival->deskripsi_festival}}">{{$festival->deskripsi_festival}}</textarea>
              </div>

              <div class="form-group">
                <label for="materi_festival" class="col-form-label"> Materi Poster : </label>
                <input type="text" class="form-control" id="materi_festival" name = "materi_festival" placeholder="{{$festival->materi_festival}}" value = "{{$festival->materi_festival}}">
              </div>

              <div class="form-group">
                <label for="harga_festival" class="col-form-label"> Tanggal Festival : </label>
                <input type="text" class="form-control" id="harga_festival" name = "harga_festival" placeholder="{{$festival->harga_festival}}" value = "{{$festival->harga_festival}}">
              </div>

              <div class="form-group">
                <label for="gambar_festival" class="col-form-label"> Poster festival : </label>
                <input type="file" class="form-control" id="gambar_festival" name = "gambar_festival" placeholder="{{$festival->gambar_festival}}" value = "{{$festival->gambar_festival}}">
              </div>

              <center>

              <button class="btn btn-primary" type = "submit" name = "submit">Submit</button>
            </center>
            </form>









    </div>



@endsection
