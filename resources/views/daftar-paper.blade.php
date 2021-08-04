@extends('template.template')

@section('content')



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
    <a href="" class = "btn" style = "width:400px;border-radius:10px; font-size:30px; background-color:#AD3221; color:white;"> <strong>SELENGKAPNYA</strong> </a>
        </div>
</center>





  </section>
  <!-- End Services Section -->








@endsection

