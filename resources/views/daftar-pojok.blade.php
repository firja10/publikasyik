@extends('template.template')

@section('title')
Pojok Publikasyik Menantimu !
@endsection



@section('content')



 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center" style = "  background: linear-gradient(
    to bottom,
    rgb(255, 255, 255, 0.5) 0%,
    rgb(255, 255, 255, 0.5) 100%
),
url('/startup-unpad/background-1.png');background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center  pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <center>
          <h1 style = "color:black; ">POJOK PUBLIKASYIK MENANTIMU ! </h1>

      </center>

        </div>
        {{-- <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="" />
        </div> --}}
      </div>
    </div>
  </section>
  <!-- End Hero -->




  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Call For Papers</h2>
      </div>

      <div class="row">



        @foreach ( $paper as $kertas )
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 " data-aos="zoom-in" data-aos-delay="100">
            <div class="card" style="width: 18rem;">
                <center>
                <img class="card-img-top" src="{{asset('storage/Paper/'.$kertas->poster_paper)}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$kertas->judul_paper}}</h5>
                  <?php
                  $tanggal = $kertas->tanggal_paper;
                  $tanggalbaru = strtotime($tanggal);

                  ?>
                  <p class="card-text"> <i class = "fa fa-calendar"></i> <?php echo date('d M Y', "$tanggalbaru")  ?>  </p>
                  <hr>
                  <a href="storage/Paper/{{$kertas->poster_paper}}" class="btn btn-success">Lihat Poster</a>
                </div>
                </center>
              </div>
        </div>

        @endforeach

    </div>
</div>



    <br><br><br>


    <center>
        <div class="section-title">
    <a href="{{url('/daftar-call-for-papers')}}" class = "btn" style = "width:400px;border-radius:10px; font-size:30px; background-color:#AD3221; color:white;"> <strong>SELENGKAPNYA</strong> </a>
        </div>
</center>





  </section>
  <!-- End Services Section -->







  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2 style = "color:#AD3221">Seminar Nasional</h2>
      </div>

      <center>
      <div class="row">

        @foreach ( $seminar as $webinar )


        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('storage/Seminar/'.$webinar->poster_seminar)}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$webinar->judul_seminar}}</h5>

                    <?php $dates = $webinar->tanggal_seminar;
                    $datesbaru = strtotime($dates);

                    ?>

                  <p class="card-text"> <i class = "fa fa-calendar"></i> <?php

                  echo date('d M Y ', "$datesbaru");


                  ?></p>
                  <hr>
                  <a href="#" class="btn" style = "color:#ffff;background-color:#AD3221;">Lihat Poster</a>
                </div>
              </div>
        </div>

        @endforeach
      </div>
    </center>



    </div>

    <br><br><br>


                <center>
                    <div class="section-title">
                <a href="{{url('/daftar-seminar')}}" class = "btn btn-primary" style = "width:400px;border-radius:10px; font-size:30px;"> <strong>SELENGKAPNYA</strong> </a>
                    </div>
            </center>

  </section>
  <!-- End Services Section -->











  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Perlu Template Jurnal ? Silakan Download !</h2>
      </div>

      <div class="row">

        @foreach ( $jurnal as $journal )


        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="100">

            <div class="card" style="width: 18rem;">
                <center>
                {{-- <img class="card-img-top" src="{{asset('startup-unpad/poster-contoh.png')}}" alt="Card image cap"> --}}
                <div class="card-body">
                  <h5 class="card-title"> {{$journal->judul_jurnal}}  </h5>
                  {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                  <hr>
                  <a href="{{$journal->link_jurnal}}" class="btn btn-primary">Lihat Jurnal</a>
                </div>
            </center>
              </div>

        </div>
        @endforeach


      </div>
    </div>






    <br><br><br>


    <center>
        <div class="section-title">
    <a href="{{url('/daftar-jurnal')}}" class = "btn" style = "width:400px;border-radius:10px; font-size:30px; background-color:#AD3221; color:white;"> <strong>SELENGKAPNYA</strong> </a>
        </div>
</center>






  </section>
  <!-- End Services Section -->







@endsection






































