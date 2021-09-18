
@extends('template.template')

@section('title')
Festival Publikasyik
@endsection

@section('content')
<br><br> <br> <br>
  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2 style = "color:#AD3221">FESTIVAL PUBLIKASYIK</h2>
      </div>

      <div class="row">



        @foreach ( $festival as $fest )
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 " data-aos="zoom-in" data-aos-delay="100" style = "text-align: center; margin-bottom:20px;">
            <div class="card" style="width: 18rem;">
                <center>
                <img class="card-img-top" src="{{asset('storage/Festival/'.$fest->gambar_festival)}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$fest->nama_festival}}</h5>
                  <?php
                  $tanggal = $fest->tanggal_mulai;
                  $tanggal_akhir = $fest->tanggal_berakhir;
                  $tanggalbaru = strtotime($tanggal);
                  $tanggalbaruakhir = strtotime($tanggal_akhir);

                  ?>
                  <p class="card-text"> <i class = "fa fa-calendar"></i>
                    <?//php echo date('d M Y', "$tanggalbaru")  ?>

                    @if($tanggalbaruakhir != NULL)
                    <?php echo date('d', "$tanggalbaru")  ?> -
                    <?php echo date('d M Y', "$tanggalbaruakhir")  ?>

                    @elseif($tanggalbaruakhir == NULL)
                    <?php echo date('d M Y', "$tanggalbaru")  ?>

                    @endif


                 </p>
                  <hr>
                  <a href="storage/Festival/{{$fest->gambar_festival}}" class="btn btn-success">Lihat Poster</a>
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
