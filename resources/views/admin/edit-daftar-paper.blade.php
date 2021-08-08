@extends('admin.template.app')


@section('button')





@endsection


@section('content')

<h1>EDIT Jurnal {{$paper->judul_paper}} </h1>


    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">


            <form action = "{{route('daftar-paper.update', $paper->id)}}" method = "POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
              <div class="form-group">
                <label for="judul_paper" class="col-form-label"> Nama Jurnal : </label>
                <input type="text" class="form-control" id="judul_paper" name = "judul_paper" placeholder="{{$paper->judul_paper}}" value = "{{$paper->judul_paper}}">
              </div>
              <div class="form-group">
                <label for="deskripsi_paper" class="col-form-label">Deskripsi Jurnal :</label>
                <textarea class="form-control" id="deskripsi_paper" name = "deskripsi_paper" placeholder="{{$paper->deskripsi_paper}}" value = "{{$paper->deskripsi_paper}}">{{$paper->deskripsi_paper}}</textarea>
              </div>

              <div class="form-group">
                <label for="link_paper" class="col-form-label"> Link Zoom : </label>
                <input type="text" class="form-control" id="link_paper" name = "link_paper" placeholder="{{$paper->link_paper}}" value = "{{$paper->link_paper}}">
              </div>

              <div class="form-group">
                <label for="tanggal_paper" class="col-form-label"> Tanggal Jurnal : </label>
                <input type="date" class="form-control" id="tanggal_paper" name = "tanggal_paper" placeholder="{{$paper->tanggal_paper}}" value = "{{$paper->tanggal_paper}}">
              </div>

              <div class="form-group">
                <label for="tanggal_akhir_paper" class="col-form-label"> Tanggal Akhir Pelaksanaan : </label>
                <input type="date" class="form-control" id="tanggal_akhir_paper" name = "tanggal_akhir_paper" placeholder="{{$paper->tanggal_akhir_paper}}" value = "{{$paper->tanggal_akhir_paper}}">
              </div>

              <div class="form-group">
                <label for="poster_paper" class="col-form-label"> Poster Paper : </label>
                <input type="file" class="form-control" id="poster_paper" name = "poster_paper" placeholder="{{$paper->poster_paper}}" value = "{{$paper->poster_paper}}">
              </div>



              <button class="btn btn-primary" type = "submit" name = "submit">Submit</button>

            </form>









    </div>



@endsection
