@extends('template.templatebaru')

@section('title')
Aktivitas Kami ! 
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
      <section id="services" class="services" style = "  background-color: rgba(34,64,92, 0.2);">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Berikut Merupakan Mitra Kami</h2>
          </div>

          <div class="row">
            {{-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" > --}}
            <div class="col-lg-3 mt-6 mt-lg-0" data-aos="zoom-in" data-aos-delay="100" style = "text-align: center">
              <div class="icon-box" style = "background-color:rgb(255,255,255,0.0)" >

                <div class="icon"> <img src="{{asset('startup-unpad/pomits.png')}}" alt="POMITS ITS" style = "width:210px;"> </div>
              </div>
            </div>


            {{-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200"> --}}
                <div class="col-lg-3 mt-6 mt-lg-0" data-aos="zoom-in" data-aos-delay="200" style = "text-align: center">
              <div class="icon-box" style = "background-color:rgb(255,255,255,0.0)">
                <div class="icon"> <img src="{{asset('startup-unpad/jcena-2.png')}}" alt="JCENA" style = "width:210px;"> </div>
              </div>
            </div>


            {{-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300"> --}}
                <div class="col-lg-3 mt-6 mt-lg-0" data-aos="zoom-in" data-aos-delay="300" style = "text-align: center">
              <div class="icon-box" style = "background-color:rgb(255,255,255,0.0)">
                <div class="icon"> <img src="{{asset('startup-unpad/adbis-2.png')}}" alt="AdBispreneur" style = "width:210px;"> </div>
              </div>
            </div>


            {{-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400"> --}}
                <div class="col-lg-3 mt-6 mt-lg-0" data-aos="zoom-in" data-aos-delay="400" style = "text-align: center">
              <div class="icon-box" style = "background-color:rgb(255,255,255,0.0)">
                <div class="icon"> <img src="{{asset('startup-unpad/jane-2.png')}}" alt="JANE" style = "width:210px;"> </div>
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
            <h2 class = "luarputih" >Apa Aja sih Keunggulan PUBLIKASYIK ?</h2>
          </div>

          <div class="row content">
            <div class="col-lg-6">
                <img src="{{asset('startup-unpad/gambar-layananpng.png')}}" alt="Layanan Publikasyik" style = "margin-top:25px; width:100%;text-align:center;">
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
                <div class="pic"><img src="{{asset('mentor/mas-thoriq.png')}}" class="img-fluid" alt="Mochamad Thoriq Akbar" /></div>
                <div class="member-info">
                  <h4>Mochamad Thoriq Akbar</h4>
                  <span>Research Associate at Abdul Latif Jameel Poverty Action Lab (J-PAL)</span>
                  {{-- <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p> --}}
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href="https://www.instagram.com/thoriqakbarrr/"><i class="ri-instagram-fill"></i></a>
                    <a href="https://www.linkedin.com/in/thoriqakbar/"> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                <div class="pic"><img src="{{asset('mentor/mas-diki.jpeg')}}" class="img-fluid" alt="Muhammad Diki Permana" /></div>
                <div class="member-info">
                  <h4>Muhamad Diki Permana</h4>
                  <span>Laboratory Assistant in Inorganic Chemistry, Universitas Padjadjaran</span>
                  {{-- <p>Aut maiores voluptates amet et quis praesentium qui senda para</p> --}}
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href="https://www.linkedin.com/in/muhamad-diki-permana-027571158/"> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>

            {{-- <div class="col-lg-6 mt-4">
              <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                <div class="pic"><img src="{{asset('assets/img/team/team-3.jpg')}}" class="img-fluid" alt="" /></div>
                <div class="member-info">
                  <h4>William Anderson</h4>
                  <span>CTO</span>

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

                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div> --}}
            <br>
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
                    <img src="{{asset('startup-unpad/festival-publikasyik.png')}}" alt="festival publikasyik">
                </h4>
                {{-- <ul>
                  <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                  <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                  <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                  <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>
                  <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>
                </ul> --}}
                <p id = "fp">Berisikan mengenai informasi kegiatan webinar yang akan diadakan pada bulan Agustus-November yang tersebar di seluruh PTN/PTS Se-Indonesia</p>
                <br>
                <br>
                <br>
                <br>
                <br>
            
             
                {{-- <a href="{{route('festivalindex')}}" class="buy-btn" style = "margin-top:10px;">Daftar</a> --}}

                <a href="{{url('festival-publikasyik')}}" class="buy-btn">Daftar</a>
                  {{-- <a href="{{url('user/daftar-festival-baru')}}" class="buy-btn">Daftar</a> --}}
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
              <div class="box featured">
                <h3 style = "color: #F1701C">Kelas Eksekutif</h3>
                <h4>
                    <img src="{{asset('startup-unpad/kelas-eksekutif.png')}}" alt="Kelas Eksekutif">
                </h4>

                <p id = "ke">Pilihan kelas berbayar yang disediakan PUBLIKASYIK untuk pendampingan penyusunan skripsi/karya ilmiah lainnya yang siap dipublikasikan. Kelas ini Meliputi : </p>
                <ul type = 1>
                  <li> <i class="bx bx-check"></i><strong>Paket A ( Silver )</strong> </li>
                  <li> <i class="bx bx-check"></i><strong>Paket B ( Bronze )</strong> </li>
                  <li> <i class="bx bx-check"></i><strong>Paket C (Bronze 2)</strong> </li>
                  <li> <i class="bx bx-check"></i><strong>Paket D (Gold)</strong> </li>
                  <li> <i class="bx bx-check"></i><strong>Paket Komplit Skripsi (Platinum)</strong> </li>
                  <li> <i class="bx bx-check"></i><strong>Paket Komplit Jurnal (Gold)</strong> </li>
                  <li> <i class="bx bx-check"></i><strong>Paket Komplit Jurnal (Platinum)</strong> </li>
                </ul>
                {{-- <ul>
                  <li><i class="bx bx-check"></i> Quam adipiscing vitae proin</li>
                  <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                  <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>
                  <li><i class="bx bx-check"></i> Pharetra massa massa ultricies</li>
                  <li><i class="bx bx-check"></i> Massa ultricies mi quis hendrerit</li>
                </ul> --}}
                {{-- <a href="{{url('/daftar-kelas')}}" class="buy-btn">Daftar</a> --}}
                <a href="{{url('user/daftar-kelas-baru')}}" class="buy-btn">Daftar</a>
              </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
              <div class="box">
                <h3 style = "color:#438850"> Publikasyik Paper Talent (PPT)</h3>
                <h4>
                    <img src="{{asset('startup-unpad/ppt.png')}}" alt="PPT">
                </h4>
               <p>Lomba karya tulis ilmiah (literature review atau berbasis penelitian) tingkat mahasiswa yang dapat diikuti oleh mahasiswa jurusan saintek/soshum dengan output bahwa karya ilmiah pemenang akan dipublikasikan di jurnal mitra</p>
                    <br><br> <br>

                <a href="{{url('/ppt')}}" class="buy-btn" style = "margin-top:10px;">Daftar</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Pricing Section -->

      











      

 <!-- ======= Services Section ======= -->
 <section id="services" class="services">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Aktivitas Kami</h2>
    </div>

    <div class="row">


      <div class="col-lg-12">

    



        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{asset('img/kegiatan1.png')}}" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Kelas Besar</h5>
                <p>Kelas Besar merupakan kegiatan kelas yang diadakan secara Daring dan dilaksanakan pada 12 September 2021</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{asset('img/kegiatan2.png')}}" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Seminar Keilmiahan</h5>
                <p>Seminar Keilmiahan merupakan sebuah kegiatan mengenai sharing keilmiahan yang diadakan pada tanggal ...</p>
              </div>
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>












      </div>


  </div>
</div>



  <br><br><br>





</section>




































 <!-- ======= Services Section ======= -->
 <section id="services" class="services">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Daftar Kelas Eksekutif</h2>
    </div>

    <div class="row">






      <div class="col-lg-12">

      <table class = 'table' style = "background-color:#22405C ;">
          <tbody>

              @foreach ( $eksekutif as $kelas )

              <tr  style = "border-bottom:100px solid white; ">
{{-- 
                  <th scope = "row">
                    <center>
                    <img src="{{asset('storage/Eksekutif/'. $kelas->gambar_kelas)}}" alt="" style = "text-align: center;width:70%; padding-bottom:30px;padding-top:30px;">
                  </center>
                  </td> --}}

                  <th scope = "row">
                    <center>
                  <h1 style = "text-align: center; color:white; padding-top:20px;">{{$kelas->nama_kelas}}</h1>
                  <br>
                      <h3 style = "color:white;">{{$kelas->materi_kelas}}</h3>

                       <br>

                       <?php

                       $angka = $kelas->harga_kelas;
                       $hasil_rupiah = "Rp. " . number_format($angka,2,',','.');

                       $angkadiskon = $kelas->diskon;

                       $hasil_diskon =  "Rp. " . number_format($angkadiskon,2,',','.');
                   ?>


                       <h4 style = "color:white;"><del>
                        <?php echo $hasil_rupiah; ?>
                       </del></h4>

                          <a class="btn" style = "background-color:#F1C21C; margin-bottom:20px;">
                              <h2>
                         <?php echo $hasil_diskon; ?>
                          </h2>
                          </a>

                          <br>
                          <div style = "display:inline-block; margin:0px auto;">
                            
                            <div class = "float-left" style = "margin-left:5px;margin-right:5px;">
                              <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample_{{ $kelas->id }}" aria-expanded="false" aria-controls="collapseExample_{{ $kelas->id }}" >Lihat Detail</button>
                            </div>

                            <div class="float-right" style = "margin-left:5px;margin-right:5px;">
                              <a class="btn btn-success" href = "{{route('daftarkelasbaruspesifik', $kelas->id)}}">Daftar</a>
                            </div>
                          </div>

                          <br>

                          <div class="collapse" id="collapseExample_{{ $kelas->id }}">
                            <br>
                            <div class="card card-body" id = "kartu" style = "background-color:#22405C; color:white; text-align:left;">
                             
                            
                            
                              {{-- {{$kelas->deskripsi_kelas}} --}}
                            
                              <?php
                            $kata = $kelas->deskripsi_kelas;
                            $strings = explode(' - ', $kata);
                            foreach ($strings as $str ) {
                                # code...
                                echo "<li>". $str."</li>";
                            }
                            ?>



                            
                            
                            </div>
                          </div>
                          <br>

                    </center>
                  </td>

                  {{-- <td>
                    <center>
                      <a href="" class="btn btn-success" style = "margin-bottom:20px; margin-top:50px; margin-right:20px;margin-left:20px;">Daftar Kelas</a>
                    </center>
                  </td> --}}


              </tr>

              @endforeach
          </tbody>
      </table>

      </div>






  </div>
</div>



  <br><br><br>





</section>























      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Berminat ? Hubungi Kami</h2>

          </div>

          <div class="row">


            <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch">

              <form action="{{route('storepesan')}}" method="POST" role="form" class="php-email-form">
                @csrf

                @if ($message = Session::get('store-pesan'))
                <div class="alert alert-success alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
              @endif


                <div class="form-row">


                  <div class="form-group col-md-6">
                    <label for="nama">Nama Anda</label>
                    <input type="text" name="nama" class="form-control" id="nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    {{-- <div class="validate"></div> --}}
                  </div>
                  <div class="form-group col-md-6">
                    <label for="email">Email Anda</label>
                    <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                    {{-- <div class="validate"></div> --}}
                  </div>
                </div>
                <div class="form-group">
                  <label for="judul_pesan">Judul Pesan</label>
                  <input type="text" class="form-control" name="judul_pesan" id="judul_pesan" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  {{-- <div class="validate"></div> --}}
                </div>
                <div class="form-group">
                  <label for="isi_pesan">Isi Pesan</label>
                  <textarea class="form-control" name="isi_pesan" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                  {{-- <div class="validate"></div> --}}
                </div>
                {{-- <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Pesan Telah Terkirim, Terima Kasih</div>
                </div> --}}
                <div class="text-center"><button type="submit" name = "submit">Kirimkan Pesan</button></div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->
@endsection

