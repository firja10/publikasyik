@extends('admin.template.app')

@section('title')
<title>Daftar Call for Papers - Admin</title>

@endsection


@section('judul')


<h1 class="h3 mb-0 text-gray-800">Daftar Call for Papers</h1>
@endsection



@section('content')







@section('button')


{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Open modal for</button> --}}


@endsection


@section('content')




    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-11">


        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Call of Papers</th>
                <th scope="col"> Deskripsi</th>
                <th scope="col"> Link Pelaksanaan</th>
                <th scope="col">Tanggal Pelaksanaan</th>
                <th scope="col">Akhir Tanggal Pelaksanaan</th>
                <th scope="col">Poster Acara Pelaksanaan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                ?>
                @foreach ($paper as $kertas )

              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td>{{$kertas->judul_paper}}</td>
                <td>{{$kertas->deskripsi_paper}}</td>
                <td>{{$kertas->link_paper}}</td>
                <td>{{$kertas->tanggal_paper}}</td>
                <td>{{$kertas->tanggal_akhir_paper}}</td>
                <td> <img src="{{asset('storage/Paper/'.$kertas->poster_paper)}}" alt="" style="width:50px;"> </td>
                <td>
                    <center>
                    <form action="{{route('daftar-paper.destroy', $kertas->id)}}" method = "POST">
                        @csrf
                        @method('DELETE')
                        <button type = "submit" class = "btn btn-danger" style = "margin-left:5px;margin-right:5px;margin-bottom:10px;"> Hapus</button>
                        <br>
                        <a href="{{route('daftar-paper.edit', $kertas->id)}}" class = "btn btn-primary" style = "margin-left:5px;margin-right:5px;">Edit</a>
                    </form>
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
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Paper</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action = "{{route('daftar-paper.store')}}" method = "POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="judul_paper" class="col-form-label"> Nama Acara : </label>
                <input type="text" class="form-control" id="judul_paper" name = "judul_paper">
              </div>
              <div class="form-group">
                <label for="deskripsi_paper" class="col-form-label">Deskripsi Acara :</label>
                <textarea class="form-control" id="deskripsi_paper" name = "deskripsi_paper"></textarea>
              </div>

              <div class="form-group">
                <label for="link_paper" class="col-form-label"> Link Zoom : </label>
                <input type="text" class="form-control" id="link_paper" name = "link_paper">
              </div>

              <div class="form-group">
                <label for="tanggal_paper" class="col-form-label"> Tanggal Acara : </label>
                <input type="date" class="form-control" id="tanggal_paper" name = "tanggal_paper">
              </div>

              <div class="form-group">
                <label for="tanggal_akhir_paper" class="col-form-label"> Tanggal Akhir Pelaksanaan : </label>
                <input type="date" class="form-control" id="tanggal_akhir_paper" name = "tanggal_akhir_paper">
              </div>

              <div class="form-group">
                <label for="poster_paper" class="col-form-label"> Poster Paper : </label>
                <input type="file" class="form-control" id="poster_paper" name = "poster_paper">
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






