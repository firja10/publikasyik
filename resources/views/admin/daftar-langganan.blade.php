@extends('admin.template.app')


@section('title')
Daftar Kelas Eksekutif - Admin

@endsection

@section('button')
<button href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" type="button" data-toggle="modal" data-target="#exampleModal"><i
    class="fas fa-plus fa-sm text-white-50" ></i> Tambah Data</button>
@endsection


@section('judul')


<h1 class="h3 mb-0 text-gray-800">Daftar Pendaftar Kelas Eksekutif</h1>
@endsection




@section('content')


    <!-- Area Chart -->
    {{-- <div class="col-xl-12 col-lg-11"> --}}

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Table Langganan Kelas</h6>
             </div>
                <div class="card-body">
                    <div class="table-responsive">

        <table class="table table-dark" >
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama User / Peserta</th>
                <th scope="col">Nama Kelas</th>
                <th scope="col"> Deskripsi Kelas</th>
                <th scope="col"> Materi Kelas</th>
                <th scope="col">Harga Kelas</th>
                <th scope="col">ID User</th>
                <th scope="col">ID Kelas</th>
                <th scope = "col">Tanggal Akhir Pembayaran</th>
                <th scope = "col">Status Pembayaran</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                ?>
                @foreach ($pemesanan as $exe )

              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td>{{$exe->user_name}}</td>
                <td>{{$exe->nama_kelas}}</td>
                <td>{{$exe->deskripsi_kelas}}</td>
                <td>{{$exe->materi_kelas}}</td>
                <td>{{$exe->harga_kelas}}</td>
                <td>{{$exe->user_id}}</td>
                <td>{{$exe->kelas_id}}</td>

                <td>
                  <?php 
                
                  // $tanggal = \Carbon\Carbon::createFromFormat('Y-m-d', $datas->created_at);
                  $tanggal = \Carbon\Carbon::parse($exe->created_at);

                  $deadline = $tanggal->addDays(2);

                  $deadlineanyar = date('d M Y H:i:s', strtotime($deadline));

                  echo $deadlineanyar ;


                  ?>
                </td>




                <td>
                    <center>
                        @if($exe->status_pembayaran == 1 && $deadline >= date('Y-m-d H:i:s'))
                      <strong><span style = "color:yellow;">Belum Membayar
                
                      </span></strong>
                        @elseif( $exe->status_pembayaran == 1 && $deadline < date('Y-m-d H:i:s'))
                        <strong><span style = "color:red;">Kedaluarsa</span></strong>
                      
                        @elseif($exe->status_pembayaran == 2)
                        <a href="" class="btn btn-success">Sudah Membayar</a>
                        @endif

                    </center>
                </td>
                <td>
                    <center>
                    {{-- <form action="{{route('daftar-eksekutif.destroy', $exe->id)}}" method = "POST">
                        @csrf
                        @method('DELETE')
                        <button type = "submit" class = "btn btn-danger" style = "margin-left:5px;margin-right:5px;margin-bottom:10px;"> Hapus</button>
                        <br>
                        <a href="{{route('daftar-eksekutif.edit', $exe->id)}}" class = "btn btn-primary" style = "margin-left:5px;margin-right:5px;">Edit</a>
                    </form> --}}
                    @if($exe->status_pembayaran == 1)
                    <form action="{{route('konfirmasibayar', $exe->id)}}" method="POST">
                        @csrf
                    <button type = "submit" name = "submit" class = "btn btn-warning" style = "color:black;" >Jika Sudah, Konfirmasi Pembayaran</button>
                    </form>
                        <br>
                    <form action="{{route('deletepemesanan', $exe->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name = "submit" class="btn btn-danger">Hapus Kelas</button>
                    </form>
                    @elseif($exe->status_pembayaran == 2)
                    <a href="" class="btn btn-success">Sudah Membayar</a>
                    <br> <br>
                    <form action="{{route('deletepemesanan', $exe->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name = "submit" class="btn btn-danger">Hapus Kelas</button>
                    </form>
                    @endif
                </center>

                </td>

              </tr>

            @endforeach
            </tbody>
          </table>
    {{-- </div> --}}

    Halaman : {{ $pemesanan->currentPage() }} <br/>
    Jumlah Data : {{ $pemesanan->total() }} <br/>
    Data Per Halaman : {{ $pemesanan->perPage() }} <br/>


      <br> <br>
    <div class="d-flex justify-content-center">
      <center> {{ $pemesanan->links() }}</center>
    </div>


</div>
</div>
</div>





    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Kelas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action = "{{route('daftar-eksekutif.store')}}" method = "POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="nama_kelas" class="col-form-label"> Nama Kelas : </label>
                <input type="text" class="form-control" id="nama_kelas" name = "nama_kelas">
              </div>
              <div class="form-group">
                <label for="deskripsi_kelas" class="col-form-label">Deskripsi Kelas :</label>
                <textarea class="form-control" id="deskripsi_kelas" name = "deskripsi_kelas"></textarea>
              </div>

              <div class="form-group">
                <label for="materi_kelas" class="col-form-label">Materi Kelas : </label>
                <input type="text" class="form-control" id="materi_kelas" name = "materi_kelas">
              </div>

              <div class="form-group">
                <label for="harga_kelas" class="col-form-label"> Harga Kelas : </label>
                <input type="text" class="form-control" id="harga_kelas" name = "harga_kelas">
              </div>


              <div class="form-group">
                <label for="gambar_kelas" class="col-form-label"> Poster Kelas : </label>
                <input type="file" class="form-control" id="gambar_kelas" name = "gambar_kelas">
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
