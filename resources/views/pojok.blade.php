@extends('template.template')

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
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">

            <div class="card" style="width: 18rem;">
                <center>
                <img class="card-img-top" src="{{asset('startup-unpad/call-for-papers-1.jpeg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Time To Deliver Clean Energy For The Nations</h5>
                  <p class="card-text"> <i class = "fa fa-calendar"></i> 4 - 6 Juni 2014 </p>
                  <hr>
                   <a href="#" class="btn btn-success">Lihat Poster</a>
                </div>
            </center>
              </div>

        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="card" style="width: 18rem;">
                <center>
                <img class="card-img-top" src="{{asset('startup-unpad/call-for-papers-2.jpeg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Berkala Ilmu Perpustakaan dan Informasi</h5>
                  <p class="card-text"> <i class = "fa fa-calendar"></i> Juni 2018 </p>
                  <hr>
                  <a href="#" class="btn btn-success">Lihat Poster</a>
                </div>
                </center>
              </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="card" style="width: 18rem;">
                <center>
                <img class="card-img-top" src="{{asset('startup-unpad/call-for-papers-3.jpeg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Security For Sovereignity</h5>
                  <p class="card-text"> <i class = "fa fa-calendar"></i> 17 Oktober 2018 </p>
                  <hr>
                  <a href="#" class="btn btn-success">Lihat Poster</a>
                </div>
                </center>
              </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card" style="width: 18rem;">
              <center>
                <img class="card-img-top" src="{{asset('startup-unpad/call-for-papers-4.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">ISITIA 2021</h5>
                  {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                  <p class="card-text"> <i class = "fa fa-calendar"></i> 21 - 22 Juli 2021 </p>
                  <hr>
                  <a href="#" class="btn btn-success">Lihat Poster</a>
                </div>
              </center>
              </div>
        </div>
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







  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2 style = "color:#AD3221">Seminar Nasional</h2>
      </div>

      <center>
      <div class="row">
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">

            <div class="card" style="width: 18rem;">
                {{-- <center> --}}
                <img class="card-img-top" src="{{asset('startup-unpad/seminar-1.jpeg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Alternatif Pembiayaan Program Kerja Kemahasiswaan UNPAD</h5>
                  {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                  <p class="card-text"> <i class = "fa fa-calendar"></i> 24 Februari 2017 </p>
                  <hr>
                  <a href="#" class="btn" style = "color:#ffff;background-color:#AD3221;">Lihat Poster</a>
                </div>
            {{-- </center> --}}
              </div>

        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('startup-unpad/seminar-5.jpeg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Business Analytics : A New Source of Competitive Advantage</h5>
                  <p class="card-text"> <i class = "fa fa-calendar"></i> 25 Oktober 2018 </p>
                  <hr>
                  <a href="#" class="btn" style = "color:#ffff;background-color:#AD3221;">Lihat Poster</a>
                </div>
              </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('startup-unpad/seminar-3.jpeg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Era Baru Pendidikan Tinggi Pasca Penanganan Covid-19</h5>
                  <p class="card-text"> <i class = "fa fa-calendar"></i> 26 Juli 2021 </p>
                  <hr>
                  <a href="#" class="btn" style = "color:#ffff;background-color:#AD3221;">Lihat Poster</a>
                </div>
              </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{asset('startup-unpad/seminar-4.png')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Seminar Nasional Kimia 2019</h5>
                  <p class="card-text"> <i class = "fa fa-calendar"></i> 24 Juli 2019</p>
                  <hr>
                  <a href="#" class="btn" style = "color:#ffff;background-color:#AD3221;">Lihat Poster</a>
                </div>
              </div>
        </div>


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











  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Perlu Template Jurnal ? Silakan Download !</h2>
      </div>

      <div class="row">
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">

            <div class="card" style="width: 18rem;">
                <center>
                {{-- <img class="card-img-top" src="{{asset('startup-unpad/poster-contoh.png')}}" alt="Card image cap"> --}}
                <div class="card-body">
                  <h5 class="card-title">Perengkahan Katalitik Metil Ester dari Minyak Jelantah Menggunakan
                    Katalis Ni/ZSM5 yang Dihasilkan dengan Metode Ion Exchangee</h5>
                  {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                  <hr>
                  <a href="https://drive.google.com/file/d/1-W2KDDRe0co4ZQPuYyM32K_7WARBRb-v/view?usp=sharing" class="btn btn-primary">Lihat Jurnal</a>
                </div>
            </center>
              </div>

        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="card" style="width: 18rem;">
              <center>
                {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                <div class="card-body">
                  <h5 class="card-title">METODE PEMBELAJARAN AKTIF TIPE GROUP TO GROUP EXCHANGE (GGE) UNTUK MENINGKATKAN HASIL BELAJAR SISWA PADA MATERI CAHAYA</h5>
                  {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                  <hr>
                  <a href="https://drive.google.com/file/d/1Fe5sZ7GWkj02f7BLPr4XPyMXv1iRKj-z/view?usp=sharing" class="btn btn-primary">Lihat Jurnal</a>
                </div>
              </center>
              </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="card" style="width: 18rem;">
              <center>
                {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                <div class="card-body">
                  <h5 class="card-title">PENINGKATAN KOMPETENSI PADA MATA PELAJARAN KEWIRAUSAHAAN
                    DENGAN PENERAPAN PEMBELAJARAN KOOPERATIF MODEL
                    THINK PAIR SHARE (TPS) DI SMK NEGERI 2 GODEAN</h5>
                  {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                  <hr>
                  <a href="https://drive.google.com/file/d/1aMaV1dQbm1MYD6a5Zgk9Kt7r4M1ctgtC/view?usp=sharing" class="btn btn-primary">Lihat Jurnal</a>
                </div>
              </center>
              </div>
        </div>

        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="card" style="width: 18rem;">
              <center>
                {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                <div class="card-body">
                  <h5 class="card-title">PERAN KEBIJAKAN RASKIN TERHADAP ALOKASI PENGELUARAN RUMAH
                    TANGGA PETANI DALAM UPAYA MENDUKUNG KETAHANAN PANGAN: Studi
                    Kasus di Desa Gambarsari Kecamatan Kemangkon Kabupaten Purbalingga</h5>
                  {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                  <hr>
                  <a href="#" class="btn btn-primary">Lihat Jurnal</a>
                </div>
              </center>
              </div>
        </div>
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






































