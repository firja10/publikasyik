@extends('user.template.app')
{{-- @extends('template.template') --}}

@section('title')

Riwayat Festival

@endsection


@section('style')

<style>

#riwayat-festival a {
    background-color: white;
}

#riwayat-festival a span {
    color: #AD3221;
}

#riwayat-festival a i{
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
        {{-- <h2>Daftar Riwayat Festival Anda</h2> --}}
    </div>
    <br>






     <!-- DataTales Example -->
     <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-danger">Daftar Riwayat Festival Anda</h3>
        </div>
        <div class="card-body">



            @if ($message = Session::get('daftarfestivaluser-store'))
            <div class="alert alert-success">
                <span> <strong> {{$message}}</strong> </span>
            </div>
            @endif

            @if ($message = Session::get('daftarfestival-hapus'))
            <div class="alert alert-danger">
                <span> <strong> {{$message}}</strong> </span>
            </div>
            @endif





            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style = "text-align: center;">
                    <thead>
                        <tr>
                            <th>Nama Festival</th>
                            <th>Deskripsi Festival</th>
                            <th>Harga Festival</th>
                            <th>Metode Pembayaran</th>
                            <th>Status Pembayaran</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>


                        @foreach ( $data as $datas )
                        <tr>
                            <td>{{$datas->nama_festival}}</td>
                            <td>{{$datas->deskripsi_festival}}</td>
                            <td>
                                {{-- {{$datas->harga_festival}} --}}

                                <?php

                                $angkasatu = $datas->harga_festival;
                                $angkafloat = floatval($angkasatu);
                                $hasil_rupiahsatu = "Rp " . number_format($angkafloat,2,',','.');

                                $angkadiskonsatu = $datas->diskon;
                                $angkadiskonfloat = floatval($angkadiskonsatu);
                                $hasil_diskonsatu = "Rp " . number_format($angkadiskonfloat,2,',','.');

                                // $hasil_diskonsatu =  "Rp " . number_format($angkadiskonsatu,2,',','.');

                                if($angkadiskonsatu != NULL || $angkadiskonsatu != 0)
                                {
                                    echo $hasil_diskonsatu;
                                }

                                elseif($angkadiskonsatu == NULL || $angkadiskonsatu == 0)
                                {
                                    echo $hasil_rupiahsatu;
                                }


                            ?>


                            </td>
                            <td>
                                {{$datas->metode_pembayaran}}
                            </td>
                            <td>  <?php $status = $datas->status_pembayaran;
                                        $sifat = $datas->harga_festival;
                                if($status == 1)
                                {
                                    echo "Sudah Mendaftar, Belum Membayar";
                                }
                                elseif($status == 2) {
                                    echo "Sudah Membayar / Festival Gratis";
                                }

                                elseif($status == 0 || $status == NULL)
                                {
                                    if($sifat == 'FREE' || $sifat = 'Free')
                                    {
                                        echo "Festival Gratis";
                                    }
                                    else {

                                    }

                                }
                                ?></td>
                            <td>
                              @if($datas->status_pembayaran == 1)
                                <center><a href="" class="btn btn-warning" style = "color:black;"> Selesaikan Pembayaran </a></center>
                                <br>
                                <center>
                                    <form action="{{route('batalkanfestival', $datas->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name = "submit" class="btn btn-danger">Batalkan Festival</button>
                                    </form>
                                </center>
                              @elseif($datas->status_pembayaran == 2)
                              <center><a href="" class="btn btn-success"> Akses Festival </a></center>
                              <br>
                              <center>
                                <form action="{{route('batalkanfestival', $datas->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name = "submit" class="btn btn-danger">Hapus Riwayat Festival</button>
                                </form>
                            </center>
                              @elseif($datas->status_pembayaran == 0 || $datas->status_pembayaran == NULL)
                              @if($datas->harga_festival == 'FREE' || $datas->harga_festival == 'Free' )
                              <center><a href="" class="btn btn-primary"> Akses Festival </a></center>
                              @else
                              <center><a href="" class="btn btn-danger"> Anda Belum Mendaftar </a></center>
                              @endif
                              <br>
                              <center>
                                <form action="{{route('batalkanfestival', $datas->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" name = "submit" class="btn btn-danger">Hapus Riwayat Festival</button>
                                </form>
                            </center>
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

