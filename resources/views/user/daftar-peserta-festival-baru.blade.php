@extends('user.template.app')

@section('title')

Daftar Festival

@endsection

@section('style')

<style>

    #daftar-festival-baru a {
        background-color: white;
    }

    #daftar-festival-baru a span {
        color: #AD3221;
    }

    #daftar-festival-baru a i{
        color: #AD3221;
    }


    </style>

@endsection


@section('content')

<div class="container-fluid">
    <div class="section-title">
        <h2>Daftar Festival Baru</h2>
    </div>
    @if ($message = Session::get('daftarfestivaluser-store'))
    <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
  @endif
    <br><br>
    <div class="row">

        @if ($hitung == 0)

        <div class="col-lg-12 mb-11">
            <h1 style = "color:red;"> Untuk saat ini masih belum ada Festival.</h1>
        </div>


        @else
        @foreach ( $festival as $fest )


        <div class="col-lg-3 mb-2">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-danger" style="text-align: center;">{{$fest->nama_festival}}</h4>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                            src="{{asset('storage/Festival/'.$fest->gambar_festival)}}" alt="festival">
                    </div>



                    <?php

                    $dates = $fest->tanggal_mulai;
                    $datesbaru = strtotime($dates);

                    $datesakhir = $fest->tanggal_berakhir;
                    $datesbaruakhir = strtotime($datesakhir);

                    ?>
                    <center>
                    @if($datesbaru == NULL && $datesbaruakhir == NULL)
                    <p class="card-text">Belum Ada Tanggal Pelaksanaan </p>
                    @elseif ($datesbaru != NULL && $datesbaruakhir != NULL )
                    <p class="card-text"> <i class = "fa fa-calendar"></i>
                    <?php

                        echo date('d', "$datesbaru");

                        ?>
                        -
                        <?php echo date('d M Y',"$datesbaruakhir"); ?>
                    </p>

                    @elseif ($datesbaru != NULL && $datesbaruakhir == NULL)
                    <p class="card-text"> <i class = "fa fa-calendar"></i> <?php

                        echo date('d M Y ', "$datesbaru");


                        ?></p>

                    @endif
                </center>




                    <p> {{$fest->deskripsi_Festival}} </p>

                    @if($fest->harga_festival == NULL || $fest->harga_festival == 'FREE' || $fest->harga_festival == 'Free')
                    <center>
                        <center>
                            <form action="{{route('daftarfestivaluser')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                  <input type="hidden" name="nama_festival" value="{{$fest->nama_festival}}">
                                  <input type="hidden" name="gambar_festival" value="{{$fest->gambar_festival}}">
                                  <input type="hidden" name="materi_festival" value="{{$fest->materi_festival}}">
                                  <input type="hidden" name="deskripsi_festival" value="{{$fest->deskripsi_festival}}">
                                  <input type="hidden" name="harga_festival" value="{{$fest->harga_festival}}">
                                  <input type="hidden" name="link_festival" value="{{$fest->link_festival}}">
                                  <input type="hidden" name="tanggal_mulai" value="{{$fest->tanggal_mulai}}">
                                  <input type="hidden" name="tanggal_berakhir" value="{{$fest->tanggal_berakhir}}">

                                  <button class="btn btn-success"  type = "submit" name = "submit">Daftar Pestival</button>

                              </form>
                           </center>
                       </center>
                    @elseif ($fest->harga_festival != NULL || $fest->harga_festival != 'FREE' || $fest->harga_festival != 'Free')
                    <center>
                        <a href="{{route('daftarfestivalbaruspesifik', $fest->id)}}" class="btn btn-success"> Daftar Festival</a>
                       </center>
                    @endif


                </div>
            </div>

        </div>
        @endforeach
        @endif


        <br><br>

    </div>

</div>

@endsection
