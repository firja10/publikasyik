@extends('template.template')

@section('title')
Selamat Datang di Publikasyik
@endsection


@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex flex-column justify-content-center  pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
              <center>
            <h1 id = "selamatdatang">SELAMAT DATANG DI PUBLIKASYIK ! <span class="input-cursor"></span></h1>
            <h2>Layanan jasa pendampingan yang menyenangkan dalam pembuatan karya ilmiah hingga proses publikasi di jurnal yang bereputasi</h2>
        </center>
        <center>

              {{-- <a href="#about" class="btn-get-started scrollto">Get Started</a>
              <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a> --}}

        </center>

          </div>
          {{-- <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
            <img src="{{asset('assets/img/hero-img.png')}}" class="img-fluid animated" alt="" />
          </div> --}}
        </div>
      </div>
    </section>
    <!-- End Hero -->

    <main id="main">
      <!-- ======= Services Section ======= -->
      <section id="services" class="services" style = "  background-color: rgb(241, 112, 28, 0.2);">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Berikut Merupakan Mitra Kami</h2>
          </div>

          <div class="row">
            {{-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" > --}}
            <div class="col-lg-3 mt-6 mt-lg-0" data-aos="zoom-in" data-aos-delay="100" style = "text-align: center">
              <div class="icon-box" style = "background-color:rgb(255,255,255,0.0)" >

                <div class="icon"> <img src="{{asset('startup-unpad/pomits.png')}}" alt="" style = "width:210px;"> </div>
              </div>
            </div>


            {{-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200"> --}}
                <div class="col-lg-3 mt-6 mt-lg-0" data-aos="zoom-in" data-aos-delay="200" style = "text-align: center">
              <div class="icon-box" style = "background-color:rgb(255,255,255,0.0)">
                <div class="icon"> <img src="{{asset('startup-unpad/jcena-2.png')}}" alt="" style = "width:210px;"> </div>
              </div>
            </div>


            {{-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300"> --}}
                <div class="col-lg-3 mt-6 mt-lg-0" data-aos="zoom-in" data-aos-delay="300" style = "text-align: center">
              <div class="icon-box" style = "background-color:rgb(255,255,255,0.0)">
                <div class="icon"> <img src="{{asset('startup-unpad/adbis-2.png')}}" alt="" style = "width:210px;"> </div>
              </div>
            </div>


            {{-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400"> --}}
                <div class="col-lg-3 mt-6 mt-lg-0" data-aos="zoom-in" data-aos-delay="400" style = "text-align: center">
              <div class="icon-box" style = "background-color:rgb(255,255,255,0.0)">
                <div class="icon"> <img src="{{asset('startup-unpad/jane-2.png')}}" alt="" style = "width:210px;"> </div>
              </div>

            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2 class = "luarputih">Apa Aja sih Keunggulan PUBLIKASYIK ?</h2>
          </div>

          <div class="row content">
            <div class="col-lg-6">
                <img src="{{asset('startup-unpad/gambar-layananpng.png')}}" alt="" style = "margin-top:25px; width:100%;text-align:center;">
            </div>

            <div class="col-lg-6 pt-4 pt-lg-0">

                <center>

             <div class="card" style="width: 18rem; background-color:rgb(255,255,255,0.0); border-style:none;">

                <i class = "card-img-top fa fa-thumbs-up" style = "font-size:75px; color:#F1701C"> </i>
                <div class="card-body">
                  <h5 class="card-title" style = "color:#F1701C;">Tenaga mentor ahli</h5>

                </div>
              </div>

            </center>

            <center>

              <div class="card" style="width: 18rem; background-color:rgb(255,255,255,0.0); border-style:none;">

                <i class = "card-img-top fa fa-reply-all" style = "font-size:75px; color:#438850"> </i>
                <div class="card-body">
                  <h5 class="card-title" style = "color:#438850">Pembelajaran Interaktif</h5>

                </div>
              </div>

            </center>

            <center>

              <div class="card" style="width: 18rem; background-color:rgb(255,255,255,0.0); border-style:none;">

                <i class = "card-img-top fa fa-smile-o" style = "font-size:75px; color:#5516DC"> </i>
                <div class="card-body">
                  <h5 class="card-title" style = "color:#5516DC">Suasana Menyenangkan</h5>

                </div>
              </div>

            </center>



            <center>

              <div class="card" style="width: 18rem; background-color:rgb(255,255,255,0.0); border-style:none;">

                <i class = "card-img-top fa fa-comments-o" style = "font-size:75px; color:#AD3221"> </i>
                <div class="card-body">
                  <h5 class="card-title" style = "color:#AD3221">Terdapat fasilitas One on One Mentoring</h5>

                </div>
              </div>


            </center>
        </div>



              {{-- <a href="#" class="btn-learn-more">Learn More</a> --}}
            </div>
          </div>
        </div>
      </section>
      <!-- End About Us Section -->








      <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2 id = "mentor">Berikut Daftar Mentor Kami !</h2>

          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                {{-- <div class="pic"><img src="{{asset('assets/img/team/team-1.jpg')}}" class="img-fluid" alt="" /></div> --}}
                <div class="pic"><img src="{{asset('mentor/mas-thoriq.png')}}" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>Mochamad Thoriq Akbar</h4>
                  <span>Research Associate at J-PAL</span>
                  {{-- <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p> --}}
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                <div class="pic"><img src="{{asset('assets/img/team/team-2.jpg')}}" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                  {{-- <p>Aut maiores voluptates amet et quis praesentium qui senda para</p> --}}
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                <div class="pic"><img src="{{asset('assets/img/team/team-3.jpg')}}" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                  {{-- <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p> --}}
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                <div class="pic"><img src="{{asset('assets/img/team/team-4.jpg')}}" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                  {{-- <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p> --}}
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Team Section -->





















      <!-- ======= Pricing Section ======= -->
      <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2 id = "adaapa">Ada Apa Aja sih di Publikasyik ?</h2>

          </div>

          <div class="row">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="box">
                <h3 style = "color:#5516DC">Festival Publikasyik</h3>
                <h4>
                    <img src="{{asset('startup-unpad/festival-publikasyik.png')}}" alt="">
                </h4>
                {{-- <ul>
                  <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                  <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                  <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                  <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                  <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul> --}}
                <p id = "fp">Berisikan mengenai informasi kegiatan webinar yang diadakan pada bulan Agustus-November dengan mencantumkan posternya dan tempat untuk upload screenshot persyaratan yang telah calon peserta ikuti untuk mengikuti webinar yang akan diadakan</p>
                <br>
                <br>
                <a href="#" class="buy-btn" style = "margin-top:10px;">Daftar</a>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="box featured">
                <h3 style = "color: #F1701C">Kelas Eksekutif</h3>
                <h4>
                    <img src="{{asset('startup-unpad/kelas-eksekutif.png')}}" alt="">
                </h4>

                <p id = "ke">Pilihan kelas berbayar yang disediakan PUBLIKASYIK untuk pendampingan penyusunan skripsi/karya ilmiah lainnya yang siap dipublikasikan. Kelas ini Meliputi : </p>
                <ul type = 1>
                    <li> <i class="bx bx-check"></i><strong>Kelas Bab 1</strong> </li>
                    <li> <i class="bx bx-check"></i><strong>Kelas Bab 2</strong> </li>
                    <li> <i class="bx bx-check"></i><strong>Kelas Bab 3</strong> </li>
                    <li> <i class="bx bx-check"></i><strong>Kelas Bab 4</strong> </li>
                </ul>
                {{-- <ul>
                  <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                  <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                  <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                  <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                  <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                </ul> --}}
                <a href="{{url('/daftar-kelas')}}" class="buy-btn">Daftar</a>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <div class="box">
                <h3 style = "color:#438850"> Publikasyik Paper Talent (PPT)</h3>
                <h4>
                    <img src="{{asset('startup-unpad/ppt.png')}}" alt="">
                </h4>
               <p>Lomba karya tulis ilmiah (literature review atau berbasis penelitian) tingkat mahasiswa yang dapat diikuti oleh mahasiswa jurusan saintek/soshum dengan output bahwa karya ilmiah pemenang akan dipublikasikan di jurnal mitra</p>
                    <br><br> <br>

                <a href="#" class="buy-btn" style = "margin-top:10px;">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Pricing Section -->



      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Berminat ? Hubungi Kami</h2>

          </div>

          <div class="row">


            <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name">Nama Anda</label>
                    <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Email Anda</label>
                    <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Judul Pesan</label>
                  <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <label for="name">Isi Pesan</label>
                  <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pesan Telah Terkirim, Terima Kasih</div>
                </div>
                <div class="text-center"><button type="submit">Kirimkan Pesan</button></div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->
@endsection
