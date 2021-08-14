@extends('admin.template.app')

@section('title')
Edit Submateri {{$submateri->nama_submateri}}
@endsection


@section('button')



@endsection


@section('content')


<br>


    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <h1>EDIT {{$submateri->nama_submateri}} </h1>

            <form action = "{{route('daftar-submateri.update', $submateri->id)}}" method = "POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
              <div class="form-group">
                <label for="nama_submateri" class="col-form-label"> Nama Submateri : </label>
                <input type="text" class="form-control" id="nama_submateri" name = "nama_submateri" placeholder="{{$submateri->nama_submateri}}" value = "{{$submateri->nama_submateri}}">
              </div>
              <div class="form-group">
                <label for="penjelasan_submateri" class="col-form-label">Penjelasan Submateri :</label>
                <textarea class="form-control" id="penjelasan_submateri" name = "penjelasan_submateri" placeholder="{{$submateri->penjelasan_submateri}}" value = "{{$submateri->penjelasan_submateri}}">{{$submateri->penjelasan_submateri}}</textarea>
              </div>

              <div class="form-group">
                <label for="link_submateri" class="col-form-label"> Link Submateri : </label>
                <input type="text" class="form-control" id="link_submateri" name = "link_submateri" placeholder="{{$submateri->link_submateri}}" value = "{{$submateri->link_submateri}}">
              </div>

              <div class="form-group">
                <label for="referensi_submateri" class="col-form-label"> Referensi Submateri : </label>
                <input type="text" class="form-control" id="referensi_submateri" name = "referensi_submateri" placeholder="{{$submateri->referensi_submateri}}" value = "{{$submateri->referensi_submateri}}">
              </div>

              <div class="form-group">
                <label for="gambar_submateri" class="col-form-label"> Gambar Materi : </label>
                <input type="file" class="form-control" id="gambar_submateri" name = "gambar_submateri" placeholder="{{$submateri->gambar_submateri}}" value = "{{$submateri->gambar_submateri}}">
              </div>

              <div class="form-group">
                <label for="materi_id"> ID Materi</label>
                <input type="number" name="materi_id" id="materi_id" value = "{{$submateri->materi_id}}" placeholder = "{{$submateri->materi_id}}" class = "form-control" >
            </div>


            <center> <button class="btn btn-primary" type = "submit" name = "submit">Submit</button></center>



            </form>

            <br><br>







    </div>



@endsection
