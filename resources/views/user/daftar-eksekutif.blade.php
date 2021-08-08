@extends('user.template.app')
{{-- @extends('template.template') --}}

@section('content')

<br>
<br>
<br>
<br>

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Daftar Kelas Eksekutif</h2>
    </div>

      <div class="row">



        @foreach ( $eksekutif as $exe )
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 " data-aos="zoom-in" data-aos-delay="100">
            <div class="card" style="width: 18rem;">
                <center>
                <img class="card-img-top" src="{{asset('storage/Eksekutif/'.$exe->gambar_kelas)}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$exe->nama_kelas}}</h5>
                  <?php
                  $price = $exe->harga_kelas;


                  ?>
                  <p class="card-text"> <i class = "fa fa-calendar"></i> <?php $price ?> </p>
                  <hr>
                  <a href="storage/Eksekutif/{{$exe->gambar_kelas}}" class="btn btn-success">Lihat Poster</a>
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

