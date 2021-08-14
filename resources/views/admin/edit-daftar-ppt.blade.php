@extends('admin.template.app')

@section('title')
Edit PPT {{$ppt->nama_ppt}}
@endsection


@section('button')





@endsection


@section('content')




    <!-- Area Chart -->
    <div class="col-xl-6 col-lg-5">

        <h1>EDIT {{$ppt->nama_ppt}} </h1>


            <form action = "{{route('daftar-ppt.update', $ppt->id)}}" method = "POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
              <div class="form-group">
                <label for="nama_ppt" class="col-form-label"> Nama Lomba: </label>
                <input type="text" class="form-control" id="nama_ppt" name = "nama_ppt" placeholder="{{$ppt->nama_ppt}}" value = "{{$ppt->nama_ppt}}">
              </div>
              <div class="form-group">
                <label for="deskripsi_ppt" class="col-form-label">Deskripsi Lomba :</label>
                <textarea class="form-control" id="deskripsi_ppt" name = "deskripsi_ppt" placeholder="{{$ppt->deskripsi_ppt}}" value = "{{$ppt->deskripsi_ppt}}">{{$ppt->deskripsi_ppt}}</textarea>
              </div>

              <div class="form-group">
                <label for="materi_ppt" class="col-form-label"> Materi Lomba : </label>
                <input type="text" class="form-control" id="materi_ppt" name = "materi_ppt" placeholder="{{$ppt->materi_ppt}}" value = "{{$ppt->materi_ppt}}">
              </div>

              <div class="form-group">
                <label for="harga_ppt" class="col-form-label"> Harga Lomba : </label>
                <input type="text" class="form-control" id="harga_ppt" name = "harga_ppt" placeholder="{{$ppt->harga_ppt}}" value = "{{$ppt->harga_ppt}}">
              </div>

              <div class="form-group">
                <label for="gambar_ppt" class="col-form-label"> Poster Lomba : </label>
                <input type="file" class="form-control" id="gambar_ppt" name = "gambar_ppt" placeholder="{{$ppt->gambar_ppt}}" value = "{{$ppt->gambar_ppt}}">
              </div>

              <center>

              <button class="btn btn-primary" type = "submit" name = "submit">Submit</button>
            </center>
            </form>









    </div>



@endsection
