@extends('admin.template.app')



@section('title')
Daftar User - Admin
@endsection


@section('judul')


<h1 class="h3 mb-0 text-gray-800">Daftar User</h1>
@endsection



@section('button')
{{-- <button href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" type="button" data-toggle="modal" data-target="#exampleModal"><i
    class="fas fa-plus fa-sm text-white-50" ></i> Tambah Data</button> --}}
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
                <th scope="col">ID User</th>
                <th scope="col">Nama User</th>
                <th scope="col"> Email User</th>
                <th scope="col"> Status User</th>
                <th scope = "col">Aksi</th>
                <th scope = "col">Konfirmasi Admin</th>

              </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                ?>
                @foreach ($user as $users )

              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td> {{$users->id}} </td>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>
                    @if($users->is_admin == 1)
                    <strong>Admin</strong>
                    @else
                    <strong>User Biasa</strong>
                    @endif
                 </td>


                <td>
                    <center>
                    <form action="{{route('hapususer', $users->id)}}" method = "POST">
                        @csrf
                        @method('DELETE')
                        <button type = "submit" class = "btn btn-danger" style = "margin-left:5px;margin-right:5px;margin-bottom:10px;"> Hapus User</button>
                        <br>
                    </form>
                </center>

                </td>

                <td>

                    @if($users->is_admin == 1)

                    <button class = "btn btn-success"> Sudah Jadi Admin </button>

                    @else

                    <form action="{{route('konfirmasiadmin', $users->id)}}" method = "POST">
                        @csrf
                        @method('PATCH')
                        <button type = "submit" class = "btn btn-primary" style = "margin-left:5px;margin-right:5px;margin-bottom:10px;">Konfirmasi Admin</button>
                        <br>
                    </form>
                    @endif

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
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Submateri</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action = "" method = "POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="nama_submateri" class="col-form-label"> Nama Submateri : </label>
                <input type="text" class="form-control" id="nama_submateri" name = "nama_submateri">
              </div>
              <div class="form-group">
                <label for="penjelasan_submateri" class="col-form-label">Penjelasan Submateri :</label>
                <textarea class="form-control" id="penjelasan_submateri" name = "penjelasan_submateri"></textarea>
              </div>

              <div class="form-group">
                <label for="link_submateri" class="col-form-label"> Link Submateri : </label>
                <input type="text" class="form-control" id="link_submateri" name = "link_submateri">
              </div>

              <div class="form-group">
                <label for="referensi_submateri" class="col-form-label"> Referensi Submateri : </label>
                <input type="text" class="form-control" id="referensi_submateri" name = "referensi_submateri">
              </div>



              <div class="form-group">
                <label for="gambar_submateri" class="col-form-label"> Gambar Submateri : </label>
                <input type="file" class="form-control" id="gambar_submateri" name = "gambar_submateri">
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






