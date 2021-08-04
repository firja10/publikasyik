

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
                <a href="" class = "btn btn-primary" style = "width:400px;border-radius:10px; font-size:30px;"> <strong>SELENGKAPNYA</strong> </a>
                    </div>
            </center>

  </section>
  <!-- End Services Section -->
