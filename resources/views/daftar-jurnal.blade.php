@extends('template.template')

@section('content')

<br>
<br>
<br>
<br>

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






  </section>
  <!-- End Services Section -->

  @endsection
