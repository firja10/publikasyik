@extends('user.template.app')
{{-- @extends('template.template') --}}

@section('title')

Riwayat Kelas

@endsection


@section('style')

<style>

#riwayat-kelas a {
    background-color: white;
}

#riwayat-kelas a span {
    color: #AD3221;
}

#riwayat-kelas a i{
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
            <h3 class="m-0 font-weight-bold text-danger">Daftar Riwayat Kelas Anda</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style = "text-align: center;">
                    <thead>
                        <tr>
                            <th>Nama Kelas</th>
                            <th>Deskripsi Kelas</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Berakhir</th>
                            <th>Status Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>
                                <center><a href="" class="btn btn-success"> Akses Kelas </a></center>

                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>














</div>



    <br><br><br>









@endsection

