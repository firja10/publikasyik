








@extends('template.template')

@section('title')
Daftar Seminar Nasional
@endsection

@section('content')
<br><br> <br> <br>
  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2 style = "color:#AD3221">Seminar Nasional</h2>
      </div>


      @if ($message = Session::get('daftarfestival-store'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
      </div>
    @endif


      <center>
      <div class="row">

        @foreach ( $festival as $webinar )


        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400" style = "padding-top:20px;">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('storage/Festival/'.$webinar->gambar_festival)}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$webinar->nama_festival}}</h5>


                    <?php

                    $dates = $webinar->tanggal_mulai;
                    $datesbaru = strtotime($dates);

                    $datesakhir = $webinar->tanggal_berakhir;
                    $datesbaruakhir = strtotime($datesakhir);

                    ?>

                    @if($datesbaru == NULL && $datesbaruakhir == NULL)
                    <p class="card-text">Belum Ada </p>
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
                    <p class="card-text">
                        {{$webinar->deskripsi_festival}}
                    </p>

                  <hr>
                  <form action="{{route('daftarfestival')}}" method="post" enctype="multipart/form-data">
                    @csrf
                      <input type="hidden" name="nama_festival" value="{{$webinar->nama_festival}}">
                      <input type="hidden" name="gambar_festival" value="{{$webinar->gambar_festival}}">
                      <input type="hidden" name="materi_festival" value="{{$webinar->materi_festival}}">
                      <input type="hidden" name="deskripsi_festival" value="{{$webinar->deskripsi_festival}}">
                      <input type="hidden" name="harga_festival" value="{{$webinar->harga_festival}}">
                      <input type="hidden" name="link_festival" value="{{$webinar->link_festival}}">
                      <input type="hidden" name="tanggal_mulai" value="{{$webinar->tanggal_mulai}}">
                      <input type="hidden" name="tanggal_berakhir" value="{{$webinar->tanggal_berakhir}}">

                      <button class="btn" style = "color:#ffff;background-color:#AD3221;" type = "submit" name = "submit">Daftar</button>

                  </form>

                </div>
              </div>
        </div>

        @endforeach
      </div>
    </center>
    <br>



    </div>

    <br><br><br>


  </section>
  <!-- End Services Section -->

  @endsection
