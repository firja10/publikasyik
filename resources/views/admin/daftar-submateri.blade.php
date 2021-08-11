@extends('admin.template.app')



@section('title')
<title>Daftar Submateri - Admin</title>

@endsection


@section('judul')


<h1 class="h3 mb-0 text-gray-800">Daftar Submateri</h1>
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
                <th scope="col">ID Materi</th>
                <th scope="col">Nama Submateri</th>
                <th scope="col"> Penjelasan Submateri</th>
                <th scope="col"> Link Submateri</th>
                <th scope="col"> Gambar Poster Submateri</th>
                <th scope="col">Referensi Submateri</th>
                <th scope = "col">Aksi</th>

              </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                ?>
                @foreach ($submateri as $webinar )

              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td> {{$webinar->materi_id}} </td>
                <td>{{$webinar->nama_submateri}}</td>
                <td>{{$webinar->penjelasan_submateri}}</td>
                <td> <a href="{{$webinar->link_submateri}}">{{$webinar->link_submateri}}</a> </td>
                <td><img src="{{asset('storage/Submateri/'.$webinar->gambar_submateri)}}" alt="" style="width:50px;"> </td>
                <td>{{$webinar->referensi_submateri}}</td>

                <td>
                    <center>
                    <form action="{{route('daftar-submateri.destroy', $webinar->id)}}" method = "POST">
                        @csrf
                        @method('DELETE')
                        <button type = "submit" class = "btn btn-danger" style = "margin-left:5px;margin-right:5px;margin-bottom:10px;"> Hapus</button>
                        <br>
                        <a href="{{route('daftar-submateri.edit', $webinar->id)}}" class = "btn btn-primary" style = "margin-left:5px;margin-right:5px;">Edit</a>
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
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Submateri</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action = "{{route('daftar-submateri.store')}}" method = "POST" enctype="multipart/form-data">
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

              <div class="form-group">
                <label for="kelas_id"> ID Materi</label>
                <select name="kelas_id" id="kelas_id" class="form-control">
                  @foreach ($materi as $materis )
                    <option>{{$materis->id}}</option>
                    @endforeach
                    {{-- <option value="1">1</option>
                    <option value="2">2</option> --}}
                </select>
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






