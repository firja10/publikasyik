@extends('admin.template.app')



@section('title')
Daftar Materi - Admin

@endsection


@section('judul')


<h1 class="h3 mb-0 text-gray-800">Daftar Materi</h1>
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
    {{-- <div class="col-xl-12 col-lg-11"> --}}


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Table Materi Kelas</h6>
             </div>
                <div class="card-body">
                    <div class="table-responsive">

        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID Materi</th>
                <th scope="col">Nama Materi</th>
                <th scope="col"> Penjelasan Materi</th>
                <th scope="col"> Link Materi</th>
                <th scope="col"> Gambar Poster Materi</th>
                <th scope="col">Referensi Materi</th>
                <th scope="col">ID Kelas</th>
                <th scope = "col">Aksi</th>

              </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                ?>
                @foreach ($materi as $webinar )

              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td>{{$webinar->id}}</td>
                <td>{{$webinar->nama_materi}}</td>
                <td>{{$webinar->penjelasan_materi}}</td>
                <td> <a href="{{$webinar->link_materi}}">{{$webinar->link_materi}}</a> </td>
                <td><img src="{{asset('storage/Materi/'.$webinar->gambar_materi)}}" alt="" style="width:50px;"> </td>
                <td>{{$webinar->referensi_materi}}</td>
                <td>{{$webinar->kelas_id}}</td>

                <td>
                    <center>
                    <form action="{{route('daftar-materi.destroy', $webinar->id)}}" method = "POST">
                        @csrf
                        @method('DELETE')
                        <button type = "submit" class = "btn btn-danger" style = "margin-left:5px;margin-right:5px;margin-bottom:10px;"> Hapus</button>
                        <br>
                        <a href="{{route('daftar-materi.edit', $webinar->id)}}" class = "btn btn-primary" style = "margin-left:5px;margin-right:5px;">Edit</a>
                    </form>
                </center>

                </td>


              </tr>
            @endforeach
            </tbody>
          </table>

          Halaman : {{ $materi->currentPage() }} <br/>
          Jumlah Data : {{ $materi->total() }} <br/>
          Data Per Halaman : {{ $materi->perPage() }} <br/>


            <br> <br>
          <div class="d-flex justify-content-center">
            <center> {{ $materi->links() }}</center>
          </div>

    {{-- </div> --}}

    </div>
</div>
</div>



    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah Materi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action = "{{route('daftar-materi.store')}}" method = "POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="nama_materi" class="col-form-label"> Nama Materi : </label>
                <input type="text" class="form-control" id="nama_materi" name = "nama_materi">
              </div>
              <div class="form-group">
                <label for="penjelasan_materi" class="col-form-label">Penjelasan Materi :</label>
                <textarea class="form-control" id="penjelasan_materi" name = "penjelasan_materi"></textarea>
              </div>

              <div class="form-group">
                <label for="link_materi" class="col-form-label"> Link Materi : </label>
                <input type="text" class="form-control" id="link_materi" name = "link_materi">
              </div>

              <div class="form-group">
                <label for="referensi_materi" class="col-form-label"> Referensi Materi : </label>
                <input type="text" class="form-control" id="referensi_materi" name = "referensi_materi">
              </div>



              <div class="form-group">
                <label for="gambar_materi" class="col-form-label"> Gambar Materi : </label>
                <input type="file" class="form-control" id="gambar_materi" name = "gambar_materi">
              </div>
              <div class="form-group">
                  <label for="kelas_id"> ID Kelas</label>
                  <select name="kelas_id" id="kelas_id" class="form-control">
                    @foreach ($eksekutif as $kelas )
                      <option>{{$kelas->id}}</option>
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






