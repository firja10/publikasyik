@extends('admin.template.app')


@section('title')
Edit Daftar {{$jurnal->judul_jurnal}}
@endsection




@section('button')





@endsection


@section('content')


<h1>EDIT Jurnal {{$jurnal->judul_jurnal}} </h1>

    <!-- Area Chart -->
    <div class="col-xl-6 col-lg-5">




            <form action = "{{route('daftar-jurnal.update', $jurnal->id)}}" method = "POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
              <div class="form-group">
                <label for="judul_jurnal" class="col-form-label"> Nama Acara : </label>
                <input type="text" class="form-control" id="judul_jurnal" name = "judul_jurnal" placeholder="{{$jurnal->judul_jurnal}}" value = "{{$jurnal->judul_jurnal}}">
              </div>
              <div class="form-group">
                <label for="deskripsi_jurnal" class="col-form-label">Deskripsi Acara :</label>
                <textarea class="form-control" id="deskripsi_jurnal" name = "deskripsi_jurnal" placeholder="{{$jurnal->deskripsi_jurnal}}" value = "{{$jurnal->deskripsi_jurnal}}">{{$jurnal->deskripsi_jurnal}}</textarea>
              </div>

              <div class="form-group">
                <label for="link_jurnal" class="col-form-label"> Link Poster : </label>
                <input type="text" class="form-control" id="link_jurnal" name = "link_jurnal" placeholder="{{$jurnal->link_jurnal}}" value = "{{$jurnal->link_jurnal}}">
              </div>

              <div class="form-group">
                <label for="tanggal_jurnal" class="col-form-label"> Tanggal Acara : </label>
                <input type="date" class="form-control" id="tanggal_jurnal" name = "tanggal_jurnal" placeholder="{{$jurnal->tanggal_jurnal}}" value = "{{$jurnal->tanggal_jurnal}}">
              </div>

              <div class="form-group">
                <label for="tanggal_jurnal" class="col-form-label"> Nomor Jurnal : </label>
                <input type="text" class="form-control" id="tanggal_jurnal" name = "tanggal_jurnal" placeholder="{{$jurnal->nomor_jurnal}}" value = "{{$jurnal->nomor_jurnal}}">
              </div>

              <div class="form-group">
                <label for="poster_jurnal" class="col-form-label"> Poster jurnal : </label>
                <input type="file" class="form-control" id="poster_jurnal" name = "poster_jurnal" placeholder="{{$jurnal->poster_jurnal}}" value = "{{$jurnal->poster_jurnal}}">
              </div>

              <center>

              <button class="btn btn-primary" type = "submit" name = "submit">Submit</button>
            </center>
            </form>


            <br><br>






    </div>



@endsection
