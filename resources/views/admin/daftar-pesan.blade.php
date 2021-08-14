@extends('admin.template.app')

@section('title')
Daftar Pesan - Admin

@endsection


@section('judul')


<h1 class="h3 mb-0 text-gray-800">Daftar Pesan</h1>
@endsection

@section('button')
{{-- <button href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" type="button" data-toggle="modal" data-target="#exampleModal"><i
    class="fas fa-plus fa-sm text-white-50" ></i> Tambah Data</button> --}}
@endsection


@section('content')







@section('button')


{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Open modal for</button> --}}


@endsection


@section('content')




    <!-- Area Chart -->
    {{-- <div class="col-xl-12 col-lg-11"> --}}

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Table Pesan</h6>
             </div>
                <div class="card-body">
                    <div class="table-responsive">


        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col"> Email</th>
                <th scope="col"> Judul Pesan</th>
                <th scope="col">Isi Pesan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                ?>
                @foreach ($pesan as $pesans )

              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td>{{$pesans->nama}}</td>
                <td>{{$pesans->email}}</td>
                <td>{{$pesans->judul_pesan}}</td>
                <td> {{$pesans->isi_pesan}}</td>
                <td>
                    <center>
                    <form action="{{route('daftar-pesan.destroy', $pesans->id)}}" method = "POST">
                        @csrf
                        @method('DELETE')
                        <button type = "submit" class = "btn btn-danger" style = "margin-left:5px;margin-right:5px;margin-bottom:10px;"> Hapus</button>
                        <br>
                        {{-- <a href="{{route('daftar-pesan.edit', $pesans->id)}}" class = "btn btn-primary" style = "margin-left:5px;margin-right:5px;">Edit</a> --}}
                    </form>
                </center>

                </td>

              </tr>
            @endforeach
            </tbody>
          </table>


          Halaman : {{ $pesan->currentPage() }} <br/>
          Jumlah Data : {{ $pesan->total() }} <br/>
          Data Per Halaman : {{ $pesan->perPage() }} <br/>


            <br> <br>
          <div class="d-flex justify-content-center">
            <center> {{ $pesan->links() }}</center>
          </div>
    {{-- </div> --}}

</div>
</div>
</div>






    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah pesan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action = "" method = "POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="judul_pesan" class="col-form-label"> Nama Acara : </label>
                <input type="text" class="form-control" id="judul_pesan" name = "judul_pesan">
              </div>
              <div class="form-group">
                <label for="deskripsi_pesan" class="col-form-label">Deskripsi Acara :</label>
                <textarea class="form-control" id="deskripsi_pesan" name = "deskripsi_pesan"></textarea>
              </div>

              <div class="form-group">
                <label for="link_pesan" class="col-form-label"> Link Zoom : </label>
                <input type="text" class="form-control" id="link_pesan" name = "link_pesan">
              </div>

              <div class="form-group">
                <label for="tanggal_pesan" class="col-form-label"> Tanggal Acara : </label>
                <input type="date" class="form-control" id="tanggal_pesan" name = "tanggal_pesan">
              </div>

              <div class="form-group">
                <label for="tanggal_akhir_pesan" class="col-form-label"> Tanggal Akhir Pelaksanaan : </label>
                <input type="date" class="form-control" id="tanggal_akhir_pesan" name = "tanggal_akhir_pesan">
              </div>

              <div class="form-group">
                <label for="poster_pesan" class="col-form-label"> Poster pesan : </label>
                <input type="file" class="form-control" id="poster_pesan" name = "poster_pesan">
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






