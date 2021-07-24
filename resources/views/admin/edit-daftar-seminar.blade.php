@extends('admin.template.app')


@section('button')





@endsection


@section('content')




    <!-- Area Chart -->
    <div class="col-xl-6 col-lg-5">

        <h1>EDIT SEMINAR {{$seminar->judul_seminar}} </h1>


            <form action = "{{route('daftar-seminar.update', $seminar->id)}}" method = "POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
              <div class="form-group">
                <label for="judul_seminar" class="col-form-label"> Nama Acara : </label>
                <input type="text" class="form-control" id="judul_seminar" name = "judul_seminar" placeholder="{{$seminar->judul_seminar}}" value = "{{$seminar->judul_seminar}}">
              </div>
              <div class="form-group">
                <label for="deskripsi_seminar" class="col-form-label">Deskripsi Acara :</label>
                <textarea class="form-control" id="deskripsi_seminar" name = "deskripsi_seminar" placeholder="{{$seminar->deskripsi_seminar}}" value = "{{$seminar->deskripsi_seminar}}">{{$seminar->deskripsi_seminar}}</textarea>
              </div>

              <div class="form-group">
                <label for="link_seminar" class="col-form-label"> Link Poster : </label>
                <input type="text" class="form-control" id="link_seminar" name = "link_seminar" placeholder="{{$seminar->link_seminar}}" value = "{{$seminar->link_seminar}}">
              </div>

              <div class="form-group">
                <label for="tanggal_seminar" class="col-form-label"> Tanggal Acara : </label>
                <input type="date" class="form-control" id="tanggal_seminar" name = "tanggal_seminar" placeholder="{{$seminar->tanggal_seminar}}" value = "{{$seminar->tanggal_seminar}}">
              </div>

              <div class="form-group">
                <label for="poster_seminar" class="col-form-label"> Poster seminar : </label>
                <input type="file" class="form-control" id="poster_seminar" name = "poster_seminar" placeholder="{{$seminar->poster_seminar}}" value = "{{$seminar->poster_seminar}}">
              </div>

              <center>

              <button class="btn btn-primary" type = "submit" name = "submit">Submit</button>
            </center>
            </form>









    </div>



@endsection
