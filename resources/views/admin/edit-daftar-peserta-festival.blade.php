@extends('admin.template.app')

@section('title')
Edit Festival {{$daftarfestival->nama_festival}}

@endsection


@section('button')





@endsection


@section('content')




    <!-- Area Chart -->
    <div class="col-xl-6 col-lg-5">

        <h1>EDIT LANGGANAN FESTIVAL {{$daftarfestival->nama_festival}} </h1>


            <form action = "{{route('daftar-peserta-festival.update', $daftarfestival->id)}}" method = "POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
              <div class="form-group">
                <label for="nama_festival" class="col-form-label"> Nama Festival : </label>
                <input type="text" class="form-control" id="nama_festival" name = "nama_festival" placeholder="{{$daftarfestival->nama_festival}}" value = "{{$daftarfestival->nama_festival}}">
              </div>
              <div class="form-group">
                <label for="deskripsi_festival" class="col-form-label">Deskripsi Festival :</label>
                <textarea class="form-control" id="deskripsi_festival" name = "deskripsi_festival" placeholder="{{$daftarfestival->deskripsi_festival}}" value = "{{$daftarfestival->deskripsi_festival}}">{{$daftarfestival->deskripsi_festival}}</textarea>
              </div>

              <div class="form-group">
                <label for="materi_festival" class="col-form-label"> Materi Poster : </label>
                <input type="text" class="form-control" id="materi_festival" name = "materi_festival" placeholder="{{$daftarfestival->materi_festival}}" value = "{{$daftarfestival->materi_festival}}">
              </div>

              <div class="form-group">
                <label for="harga_festival" class="col-form-label"> Harga Festival : ( Jika Gratis ketik "FREE" )</label>
                <input type="text" class="form-control" id="harga_festival" name = "harga_festival" placeholder="{{$daftarfestival->harga_festival}}" value = "{{$daftarfestival->harga_festival}}">
              </div>

              <div class="form-group">
                <label for="tanggal_mulai" class="col-form-label"> Tanggal Mulai : </label>
                <input type="date" class="form-control" id="tanggal_mulai" name = "tanggal_mulai" placeholder="{{$daftarfestival->tanggal_mulai}}" value = "{{$daftarfestival->tanggal_mulai}}">
              </div>

              <div class="form-group">
                <label for="tanggal_berakhir" class="col-form-label"> Tanggal Berakhir : </label>
                <input type="date" class="form-control" id="tanggal_berakhir" name = "tanggal_berakhir" placeholder="{{$daftarfestival->tanggal_berakhir}}" value = "{{$daftarfestival->tanggal_berakhir}}">
              </div>

              <div class="form-group">
                <label for="link_festival" class="col-form-label">Link Festival :</label>
                <textarea class="form-control" id="link_festival" name = "link_festival" placeholder="{{$daftarfestival->link_festival}}" value = "{{$daftarfestival->link_festival}}">{{$daftarfestival->link_festival}}</textarea>
              </div>


              <div class="form-group">
                <label for="gambar_festival" class="col-form-label"> Poster festival : </label>
                <input type="file" class="form-control" id="gambar_festival" name = "gambar_festival" placeholder="{{$daftarfestival->gambar_festival}}" value = "{{$daftarfestival->gambar_festival}}">
              </div>

              <center>

              <button class="btn btn-primary" type = "submit" name = "submit">Submit</button>
            </center>
            </form>


            <br><br>









    </div>



@endsection
