@extends('admin.template.app')


@section('button')





@endsection


@section('content')




    <!-- Area Chart -->
    <div class="col-xl-6 col-lg-5">

        <h1>EDIT {{$eksekutif->nama_ppt}} </h1>


            <form action = "{{route('daftar-eksekutif.update', $eksekutif->id)}}" method = "POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
              <div class="form-group">
                <label for="nama_ppt" class="col-form-label"> Nama Lomba: </label>
                <input type="text" class="form-control" id="nama_ppt" name = "nama_ppt" placeholder="{{$eksekutif->nama_ppt}}" value = "{{$eksekutif->nama_ppt}}">
              </div>
              <div class="form-group">
                <label for="deskripsi_ppt" class="col-form-label">Deskripsi Lomba :</label>
                <textarea class="form-control" id="deskripsi_ppt" name = "deskripsi_ppt" placeholder="{{$eksekutif->deskripsi_ppt}}" value = "{{$eksekutif->deskripsi_ppt}}">{{$eksekutif->deskripsi_ppt}}</textarea>
              </div>

              <div class="form-group">
                <label for="materi_ppt" class="col-form-label"> Materi Lomba : </label>
                <input type="text" class="form-control" id="materi_ppt" name = "materi_ppt" placeholder="{{$eksekutif->materi_ppt}}" value = "{{$eksekutif->materi_ppt}}">
              </div>

              <div class="form-group">
                <label for="harga_ppt" class="col-form-label"> Harga Lomba : </label>
                <input type="text" class="form-control" id="harga_ppt" name = "harga_ppt" placeholder="{{$eksekutif->harga_ppt}}" value = "{{$eksekutif->harga_ppt}}">
              </div>

              <div class="form-group">
                <label for="gambar_ppt" class="col-form-label"> Poster Lomba : </label>
                <input type="file" class="form-control" id="gambar_ppt" name = "gambar_ppt" placeholder="{{$eksekutif->gambar_ppt}}" value = "{{$eksekutif->gambar_ppt}}">
              </div>

              <center>

              <button class="btn btn-primary" type = "submit" name = "submit">Submit</button>
            </center>
            </form>









    </div>



@endsection
