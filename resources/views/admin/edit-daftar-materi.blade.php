@extends('admin.template.app')

@section('title')
Edit Materi {{$materi->nama_materi}}

@endsection


@section('button')






@endsection


@section('content')


<br>


    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <h1>EDIT {{$materi->nama_materi}} </h1>

            <form action = "{{route('daftar-materi.update', $materi->id)}}" method = "POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
              <div class="form-group">
                <label for="nama_materi" class="col-form-label"> Nama Jurnal : </label>
                <input type="text" class="form-control" id="nama_materi" name = "nama_materi" placeholder="{{$materi->nama_materi}}" value = "{{$materi->nama_materi}}">
              </div>
              <div class="form-group">
                <label for="penjelasan_materi" class="col-form-label">Penjelasan Materi :</label>
                <textarea class="form-control" id="penjelasan_materi" name = "penjelasan_materi" placeholder="{{$materi->penjelasan_materi}}" value = "{{$materi->penjelasan_materi}}">{{$materi->penjelasan_materi}}</textarea>
              </div>

              <div class="form-group">
                <label for="link_materi" class="col-form-label"> Link Materi : </label>
                <input type="text" class="form-control" id="link_materi" name = "link_materi" placeholder="{{$materi->link_materi}}" value = "{{$materi->link_materi}}">
              </div>

              <div class="form-group">
                <label for="referensi_materi" class="col-form-label"> Referensi Materi : </label>
                <input type="text" class="form-control" id="referensi_materi" name = "referensi_materi" placeholder="{{$materi->referensi_materi}}" value = "{{$materi->referensi_materi}}">
              </div>

              <div class="form-group">
                <label for="gambar_materi" class="col-form-label"> Gambar Materi : </label>
                <input type="file" class="form-control" id="gambar_materi" name = "gambar_materi" placeholder="{{$materi->gambar_materi}}" value = "{{$materi->gambar_materi}}">
              </div>


              <div class="form-group">
                <label for="kelas_id"> ID Kelas</label>
                <input type="number" name="kelas_id" id="kelas_id" value = "{{$materi->kelas_id}}" placeholder = "{{$materi->kelas_id}}" class = "form-control" >
            </div>

            <center> <button class="btn btn-primary" type = "submit" name = "submit">Submit</button></center>



            </form>

            <br><br>







    </div>



@endsection
