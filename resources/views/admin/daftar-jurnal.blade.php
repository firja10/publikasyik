@extends('admin.template.app')


@section('title')
Daftar Jurnal - Admin

@endsection


@section('button')
<button href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" type="button" data-toggle="modal" data-target="#exampleModal"><i
    class="fas fa-plus fa-sm text-white-50" ></i> Tambah Data</button>
@endsection


@section('judul')


<h1 class="h3 mb-0 text-gray-800">Daftar Jurnal</h1>
@endsection




@section('button')


{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Open modal for</button> --}}


@endsection


@section('content')




    <!-- Area Chart -->
    {{-- <div class="col-xl-12 col-lg-11"> --}}

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Table Jurnal</h6>
             </div>
                <div class="card-body">
                    <div class="table-responsive">


        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Jurnal</th>
                <th scope="col"> Deskripsi Jurnal</th>
                <th scope="col"> Link Jurnal</th>

                <th scope="col"> Nomor Jurnal</th>
                <th scope="col">Tanggal Penerbitan</th>
                <th scope="col"> Aksi</th>

              </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                ?>
                @foreach ($jurnal as $journal )

              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td>{{$journal->judul_jurnal}}</td>
                <td>{{$journal->deskripsi_jurnal}}</td>
                <?php  $link = $journal->link_jurnal; ?>
                <td> <a href="{{$journal->link_jurnal}}">

                    <?php

                        echo substr($link,0,20)."[..]"

                        ?>




                </a> </td>

                <td>{{$journal->nomor_jurnal}}</td>
                <td>{{$journal->tanggal_jurnal}}</td>
                <td>
                    <center>
                    <form action="{{route('daftar-jurnal.destroy', $journal->id)}}" method = "POST">
                        @csrf
                        @method('DELETE')
                        <button type = "submit" class = "btn btn-danger" style = "margin-left:5px;margin-right:5px;margin-bottom:10px;"> Hapus</button>
                        <br>
                        <a href="{{route('daftar-jurnal.edit', $journal->id)}}" class = "btn btn-primary" style = "margin-left:5px;margin-right:5px;">Edit</a>
                    </form>
                </center>

                </td>


              </tr>
            @endforeach
            </tbody>
          </table>
          Halaman : {{ $jurnal->currentPage() }} <br/>
          Jumlah Data : {{ $jurnal->total() }} <br/>
          Data Per Halaman : {{ $jurnal->perPage() }} <br/>


            <br> <br>
          <div class="d-flex justify-content-center">
            <center> {{ $jurnal->links() }}</center>
          </div>


    {{-- </div> --}}
    </div>
</div>
</div>






    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Tambah jurnal</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action = "{{route('daftar-jurnal.store')}}" method = "POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                <label for="judul_jurnal" class="col-form-label"> Nama Jurnal : </label>
                <input type="text" class="form-control" id="judul_jurnal" name = "judul_jurnal">
              </div>
              <div class="form-group">
                <label for="deskripsi_jurnal" class="col-form-label">Deskripsi Jurnal :</label>
                <textarea class="form-control" id="deskripsi_jurnal" name = "deskripsi_jurnal"></textarea>
              </div>

              <div class="form-group">
                <label for="link_jurnal" class="col-form-label"> Link Jurnal : </label>
                <input type="text" class="form-control" id="link_jurnal" name = "link_jurnal">
              </div>

              <div class="form-group">
                <label for="tanggal_jurnal" class="col-form-label"> Tanggal Penerbitan : </label>
                <input type="date" class="form-control" id="tanggal_jurnal" name = "tanggal_jurnal">
              </div>

              <div class="form-group">
                <label for="nomor_jurnal" class="col-form-label"> Nomor Jurnal: </label>
                <input type="text" class="form-control" id="nomor_jurnal" name = "nomor_jurnal">
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






