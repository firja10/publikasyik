@extends('user.template.app')
{{-- @extends('template.template') --}}

@section('title')

Riwayat Kelas

@endsection


@section('style')

<style>

#tagihan-anda a {
    background-color: white;
}

#tagihan-anda a span {
    color: #AD3221;
}

#tagihan-anda a i{
    color: #AD3221;
}


</style>


@endsection





@section('button')

{{-- <button href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" type="button" data-toggle="modal" data-target="#exampleModal"><i
    class="fas fa-plus fa-sm text-white-50" ></i> Tambah Data</button> --}}
@endsection




@section('content')

<br>
<br>
<br>
<br>


    <div class="container-fluid" data-aos="fade-up">
      <div class="section-title">
        {{-- <h2>Daftar Riwayat Kelas Anda</h2> --}}
    </div>
    <br>






     <!-- DataTales Example -->
     <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-danger">Daftar Tagihan Anda</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style = "text-align: center;">
                    <thead>
                        <tr>
                            <th>Nama Kelas</th>
                            <th>Deskripsi Kelas</th>
                            <th>Tagihan Anda</th>
                            <th>Metode Pembayaran</th>
                            <th>Status Pembayaran</th>
                        </tr>
                    </thead>

                    <tbody>


                        @foreach ( $data as $datas )
                        <tr>
                            <td>{{$datas->nama_kelas}}</td>
                            <td>{{$datas->deskripsi_kelas}}</td>
                            <td> <strong><span style = "color:red;">{{$datas->harga_kelas}}</span></strong> </td>
                            <td>
                                {{$datas->metode_pembayaran}}
                            </td>
                            <td>

                              @if($datas->status_pembayaran == 1)
                                <center><a href="" class="btn btn-danger"> Anda Belum Membayar </a></center>
                              @elseif($datas->status_pembayaran == 2)
                              <center><a href="" class="btn btn-success"> Sudah Membayar </a></center>
                              @elseif($datas->status_pembayaran == 0 || $datas->status_pembayaran == NULL)
                              <center><a href="" class="btn btn-danger"> Anda Belum Mendaftar </a></center>
                              @endif

                            </td>
                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>














</div>



    <br><br><br>









@endsection

