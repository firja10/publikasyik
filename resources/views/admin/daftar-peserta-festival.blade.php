@extends('admin.template.app')



@section('title')
Daftar Peserta Festival Publikasyik - Admin

@endsection


@section('judul')


<h1 class="h3 mb-0 text-gray-800">Daftar Peserta Festival Publikasyik</h1>
@endsection



@section('button')
<button href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" type="button" data-toggle="modal" data-target="#exampleModal"><i
    class="fas fa-plus fa-sm text-white-50" ></i> Tambah Data</button>
@endsection





@section('content')




    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-11">


        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Pendaftar</th>
                <th scope="col">Username Pendaftar</th>
                <th scope="col">Nama Festival</th>
                <th scope="col"> Deskripsi Festival</th>
                <th scope="col">Harga</th>
                <th scope="col">Tanggal Mulai</th>
                <th scope="col">Tanggal Berakhir</th>
                <th scope="col">Link Festival</th>
                <th scope="col">Poster Festival</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                ?>
                @foreach ($daftarfestival as $fest )

              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td>{{$fest->user_id}}</td>
                <td>{{$fest->user_name}}</td>
                <td>{{$fest->nama_festival}}</td>
                <td>{{$fest->deskripsi_festival}}</td>
                <td>{{$fest->harga_festival}}</td>
                <td>{{$fest->tanggal_mulai}}</td>
                <td>{{$fest->tanggal_berakhir}}</td>
                <td>{{$fest->link_festival}}</td>
                <td> <img src="{{asset('storage/Festival/'.$fest->gambar_festival)}}" alt="" style="width:50px;"> </td>
                <td>






















                    <center>
                        @if($fest->status_pembayaran == 1)
                        <form action="{{route('konfirmasibayarfestival', $fest->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                        <button type = "submit" name = "submit" class = "btn btn-warning" style = "color:black;" >Jika Sudah, Konfirmasi Pembayaran</button>
                        </form>
                        <br>
                        @elseif($fest->status_pembayaran == 2)
                        <a href="" class="btn btn-success">Sudah Membayar</a>
                        <br> <br>
                        @elseif($fest->status_pembayaran == 0)
                            @if($fest->harga_festival == 'FREE' || $fest->harga_festival == 'Free')
                                <a href="" class="btn btn-secondary">Gratis</a>
                                <br> <br>
                            @else
                                <a href="" class="btn btn-success">Belum Mendaftar</a>
                                <br> <br>
                            @endif

                        @endif

                    <form action="{{route('daftar-peserta-festival.destroy', $fest->id)}}" method = "POST">
                        @csrf
                        @method('DELETE')
                        <button type = "submit" class = "btn btn-danger" style = "margin-left:5px;margin-right:5px;margin-bottom:10px;"> Hapus</button>
                        <br>
                        <a href="{{route('daftar-peserta-festival.edit', $fest->id)}}" class = "btn btn-primary" style = "margin-left:5px;margin-right:5px;">Edit</a>
                    </form>
                    <br>

                </center>

                </td>

              </tr>
            @endforeach
            </tbody>
          </table>
    </div>








    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Festival</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action = "{{route('daftar-festival.store')}}" method = "POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="nama_festival" class="col-form-label"> Nama Festival : </label>
                <input type="text" class="form-control" id="nama_festival" name = "nama_festival">
              </div>
              <div class="form-group">
                <label for="deskripsi_festival" class="col-form-label">Deskripsi Festival :</label>
                <textarea class="form-control" id="deskripsi_festival" name = "deskripsi_festival"></textarea>
              </div>

              <div class="form-group">
                <label for="materi_festival" class="col-form-label">Materi Festival : </label>
                <input type="text" class="form-control" id="materi_festival" name = "materi_festival">
              </div>

              <div class="form-group">
                <label for="harga_festival" class="col-form-label"> Harga Festival : </label>
                <input type="text" class="form-control" id="harga_festival" name = "harga_festival">
              </div>


              <div class="form-group">
                <label for="gambar_festival" class="col-form-label"> Poster Festival : </label>
                <input type="file" class="form-control" id="gambar_festival" name = "gambar_festival">
              </div>

              <div class="form-group">
                <label for="link_festival" class="col-form-label">Link Pertemuan Festival : </label>
                <input type="text" class="form-control" id="link_festival" name = "link_festival">
              </div>

              <div class="form-group">
                <label for="tanggal_mulai" class="col-form-label">Tanggal Mulai Festival : </label>
                <input type="date" class="form-control" id="tanggal_mulai" name = "tanggal_mulai">
              </div>

              <div class="form-group">
                <label for="tanggal_berakhir" class="col-form-label">Tanggal Berakhir Festival : </label>
                <input type="date" class="form-control" id="tanggal_berakhir" name = "tanggal_berakhir">
              </div>

              <button class="btn btn-primary" type = "submit" name = "submit">Submit</button>

            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>











@endsection
