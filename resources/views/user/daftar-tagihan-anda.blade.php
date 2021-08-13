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
            <h3 class="m-0 font-weight-bold text-danger">Daftar Tagihan  Anda</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style = "text-align: center;">
                    <thead>
                        <tr>
                            <th>Jenis Tagihan</th>
                            <th>Nama Tagihan</th>
                            <th>Deskripsi Tagihan</th>
                            <th>Tagihan Anda</th>
                            <th>Metode Pembayaran</th>
                            <th>Status Pembayaran</th>
                        </tr>
                    </thead>

                    <tbody>


                        @foreach ( $data as $datas )
                        <tr>
                            <td>Kelas Eksekutif</td>
                            <td>{{$datas->nama_kelas}}</td>
                            <td>{{$datas->deskripsi_kelas}}</td>
                            <td> <strong><span style = "color:red;">

                                {{-- {{$datas->harga_kelas}} --}}

                                <?php

                                $angka = $datas->harga_kelas;
                                $hasil_rupiah = "Rp " . number_format($angka,2,',','.');

                                $angkadiskon = $datas->diskon;

                                $hasil_diskon =  "Rp " . number_format($angkadiskon,2,',','.');

                                if($angkadiskon != NULL || $angkadiskon != 0)
                                {
                                    echo $hasil_diskon;
                                }

                                elseif($angkadiskon == NULL || $angkadiskon == 0)
                                {
                                    echo $hasil_rupiah;
                                }


                            ?>

                            </span></strong> </td>
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

                        @foreach ( $datadua as $datasheet )
                        <tr>
                            <td>Festival</td>
                            <td>{{$datasheet->nama_festival}}</td>
                            <td>{{$datasheet->deskripsi_festival}}</td>
                            <td> <strong><span style = "color:red;">
                                {{-- {{$datasheet->harga_festival}} --}}
                                <?php

                                $angkasatu = $datasheet->harga_festival;
                                $hasil_rupiahsatu = "Rp " . number_format($angkasatu,2,',','.');

                                $angkadiskonsatu = $datasheet->diskon;

                                $hasil_diskonsatu =  "Rp " . number_format($angkadiskonsatu,2,',','.');

                                if($angkadiskonsatu != NULL || $angkadiskonsatu != 0)
                                {
                                    echo $hasil_diskonsatu;
                                }

                                elseif($angkadiskonsatu == NULL || $angkadiskonsatu == 0)
                                {
                                    echo $hasil_rupiahsatu;
                                }


                            ?>

                            </span></strong> </td>
                            <td>
                                {{$datasheet->metode_pembayaran}}
                            </td>
                            <td>

                              @if($datasheet->status_pembayaran == 1)
                                <center><a href="" class="btn btn-danger"> Anda Belum Membayar </a></center>
                              @elseif($datasheet->status_pembayaran == 2)
                              <center><a href="" class="btn btn-success"> Sudah Membayar </a></center>
                              @elseif($datasheet->status_pembayaran == 0 || $datas->status_pembayaran == NULL)
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

