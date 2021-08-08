@extends('admin.template.app')



@section('title')
<title>Daftar Seminar - Admin</title>

@endsection


@section('judul')


<h1 class="h3 mb-0 text-gray-800">Daftar Seminar</h1>
@endsection



@section('button')
<button href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" type="button" data-toggle="modal" data-target="#exampleModal"><i
    class="fas fa-plus fa-sm text-white-50" ></i> Tambah Data</button>
@endsection





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
                <th scope="col">Judul Seminar</th>
                <th scope="col"> Deskripsi Seminar</th>
                <th scope="col"> Link Seminar</th>
                <th scope="col"> Poster Seminar</th>
                <th scope="col">Tanggal Seminar</th>
                <th scope = "col">Aksi</th>

              </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                ?>
                @foreach ($seminar as $webinar )

              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td>{{$webinar->judul_seminar}}</td>
                <td>{{$webinar->deskripsi_seminar}}</td>
                <td> <a href="{{$webinar->link_seminar}}">{{$webinar->link_seminar}}</a> </td>
                <td><img src="{{asset('storage/Seminar/'.$webinar->poster_seminar)}}" alt="" style="width:50px;"> </td>
                <td>{{$webinar->tanggal_seminar}}</td>

                <td>
                    <center>
                    <form action="{{route('daftar-seminar.destroy', $webinar->id)}}" method = "POST">
                        @csrf
                        @method('DELETE')
                        <button type = "submit" class = "btn btn-danger" style = "margin-left:5px;margin-right:5px;margin-bottom:10px;"> Hapus</button>
                        <br>
                        <a href="{{route('daftar-seminar.edit', $webinar->id)}}" class = "btn btn-primary" style = "margin-left:5px;margin-right:5px;">Edit</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah seminar</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action = "{{route('daftar-seminar.store')}}" method = "POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="judul_seminar" class="col-form-label"> Nama Seminar : </label>
                <input type="text" class="form-control" id="judul_seminar" name = "judul_seminar">
              </div>
              <div class="form-group">
                <label for="deskripsi_seminar" class="col-form-label">Deskripsi Seminar :</label>
                <textarea class="form-control" id="deskripsi_seminar" name = "deskripsi_seminar"></textarea>
              </div>

              <div class="form-group">
                <label for="link_seminar" class="col-form-label"> Link Seminar : </label>
                <input type="text" class="form-control" id="link_seminar" name = "link_seminar">
              </div>

              <div class="form-group">
                <label for="tanggal_seminar" class="col-form-label"> Tanggal Seminar : </label>
                <input type="date" class="form-control" id="tanggal_seminar" name = "tanggal_seminar">
              </div>



              <div class="form-group">
                <label for="poster_seminar" class="col-form-label"> Poster seminar: </label>
                <input type="file" class="form-control" id="poster_seminar" name = "poster_seminar">
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






