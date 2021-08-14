@extends('admin.template.app')

@section('title')
Daftar Lomba - Admin

@endsection


@section('judul')


<h1 class="h3 mb-0 text-gray-800">Daftar Lomba</h1>
@endsection


@section('button')
<button href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" type="button" data-toggle="modal" data-target="#exampleModal"><i
    class="fas fa-plus fa-sm text-white-50" ></i> Tambah Data</button>
@endsection



@section('content')



    <!-- Area Chart -->
    {{-- <div class="col-xl-12 col-lg-11"> --}}
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Table PPT</h6>
             </div>
                <div class="card-body">
                    <div class="table-responsive">

        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Lomba</th>
                <th scope="col"> Deskripsi Lomba</th>
                <th scope="col"> Materi Lomba</th>
                <th scope="col">Harga Lomba</th>
                <th scope="col">Poster Lomba</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                ?>
                @foreach ($ppt as $ppts )

              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td>{{$ppts->nama_ppt}}</td>
                <td>{{$ppts->deskripsi_ppt}}</td>
                <td>{{$ppts->materi_ppt}}</td>
                <td>{{$ppts->harga_ppt}}</td>
                <td> <img src="{{asset('storage/Ppt/'.$ppts->gambar_ppt)}}" alt="" style="width:50px;"> </td>
                <td>
                    <center>
                    <form action="{{route('daftar-ppt.destroy', $ppts->id)}}" method = "POST">
                        @csrf
                        @method('DELETE')
                        <button type = "submit" class = "btn btn-danger" style = "margin-left:5px;margin-right:5px;margin-bottom:10px;"> Hapus</button>
                        <br>
                        <a href="{{route('daftar-ppt.edit', $ppts->id)}}" class = "btn btn-primary" style = "margin-left:5px;margin-right:5px;">Edit</a>
                    </form>
                </center>

                </td>

              </tr>
            @endforeach
            </tbody>
          </table>

          Halaman : {{ $ppt->currentPage() }} <br/>
          Jumlah Data : {{ $ppt->total() }} <br/>
          Data Per Halaman : {{ $ppt->perPage() }} <br/>


            <br> <br>
          <div class="d-flex justify-content-center">
            <center> {{ $ppt->links() }}</center>
          </div>


    {{-- </div> --}}
  </div>
</div>
</div>




    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Paper</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action = "{{route('daftar-ppt.store')}}" method = "POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="nama_ppt" class="col-form-label"> Nama Lomba : </label>
                <input type="text" class="form-control" id="nama_ppt" name = "nama_ppt">
              </div>
              <div class="form-group">
                <label for="deskripsi_ppt" class="col-form-label">Deskripsi Lomba :</label>
                <textarea class="form-control" id="deskripsi_ppt" name = "deskripsi_ppt"></textarea>
              </div>

              <div class="form-group">
                <label for="materi_ppt" class="col-form-label">Materi Festival : </label>
                <input type="text" class="form-control" id="materi_ppt" name = "materi_ppt">
              </div>

              <div class="form-group">
                <label for="harga_ppt" class="col-form-label"> Harga Lomba : </label>
                <input type="text" class="form-control" id="harga_ppt" name = "harga_ppt">
              </div>


              <div class="form-group">
                <label for="gambar_ppt" class="col-form-label"> Poster Lomba : </label>
                <input type="file" class="form-control" id="gambar_ppt" name = "gambar_ppt">
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
