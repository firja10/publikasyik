<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>
        @yield('title')

    </title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{asset('startup-unpad/publikasyik.png')}}" rel="icon" />
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <style>



      @keyframes blink {
        0% {
          opacity: 1;
        }
        40% {
          opacity: 1;
        }
        60% {
          opacity: 0;
        }
        100% {
          opacity: 0;
        }
      }

      .input-cursor {
  border-right: .1em solid;
  animation: caret 1s steps(1) infinite;
}

@keyframes .input-cursor {
  50% {
    border-color: transparent;
  } }

      /* .input-cursor {
        display: inline-block;
        width: 2px;
        height: 36px;
        background-color: white;
        margin-left: 8px;
        animation: blink 0.6s linear infinite alternate;
      } */

      .typing-container {
        display: flex;
      }

      /* @media */
      @media only screen and (max-width: 600px) {
        #logo-asli-panjang{
            display: none;
        }

        #dropdownMenuButton {
              display:none;
          }




      }

      @media only screen and (min-width: 601px)
      {
          #logo-asli-pendek{
              display:none;
          }



          #buttonhp {
          display:none;
        }

        #keluar {
          display:none;
        }

        #halaman-admin{
            display:none;
        }

        #nama-hp {
            display:none;
        }

        #hal-user-hp {
            display:none;
        }


      }



    </style>

    <!-- =======================================================
  * Template Name: Arsha - v2.3.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <h1 class="logo mr-auto">
          <a href="{{url('/home')}}" class="typing-container">
             <img src="{{asset('startup-unpad/logo-publikasyik-asli.png')}}" id = "logo-asli-panjang" alt="publikasyik" style = "margin-right:15px;" >
             <img src="{{asset('startup-unpad/publikasyik.png')}}" id = "logo-asli-pendek" alt="publikasyik" style = "margin-right:15px;" >
             {{-- <span style = "display:inline-block;margin-top:5px;"> U B L I K A S Y I K</span> --}}
              {{-- <span class="input-cursor"></span> --}}
            </a>
        </h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo mr-auto"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->

        <nav class="nav-menu d-none d-lg-block">
          <ul >
            {{-- <li class="active"><a href="{{url('/home')}}">Beranda</a></li> --}}

            @if(Auth::check())
            <li> <a id = "nama-hp" style = "color:#AD3221;"> <strong>{{Auth::user()->name}}</strong>  </a> </li>

            @if(Auth::user()->is_admin == 1)
            <li> <a href="{{url('/admin.dashboard')}}" id = "halaman-admin"> Halaman Admin </a> </li>
            @endif

            <a href="{{url('/user/dashboard')}}" id = "hal-user-hp"> Halaman User</a>
            @endif

            <li><a href="{{url('/home/#hero')}}">Beranda</a></li>
            <li><a href="{{url('/home/#pricing')}}">Produk</a></li>
            <li><a href="{{url('/daftar-pojok')}}">Pojok Publikasyik</a></li>
            <li><a href="{{url('/home/#contact')}}">Kontak Kami</a></li>

            @if(Auth::check())
            <li><a href="{{ route('logout') }}" id = "keluar"  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a></li>
            @endif







          </ul>
        </nav>
        <!-- .nav-menu -->





                @if(Auth::check())


        <li class="dropdown" style = "list-style-type: none; margin-left:15px;margin-right:15px;">
            <button class="btn btn-success dropdown-toggle  py-3 px-0 px-lg-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style = "padding-right:5%;padding-left:5%; margin-right:5%;margin-left:5%'">
            <strong>   {{Auth::user()->name}} </strong>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="#">

                @if(Auth::user()->is_admin == 1)
                  <a class="dropdown-item" href="{{url('/admin/dashboard')}}"> Halaman Admin</a>
                @endif

                <a href="{{url('/user/dashboard')}}" class="dropdown-item"> Halaman User</a>

                <a class = "dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">Logout</a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>



              </a>
            </div>
        </li>

        {{-- Conditional Button HP --}}

        {{-- <a href="" class="btn btn-success" id = "buttonhp"> <i class = "fas fa-user" style = "width:50%; color:#5cb85c"></i>  </a> --}}


        @else

        <a href="{{url('/login')}}" class="get-started-btn scrollto">Log In</a>

        @endif









      </div>
    </header>
    <!-- End Header -->









@yield('content')











    <!-- ======= Footer ======= -->
    <footer id="footer" style = "margin-top:150px;">


        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6 footer-contact">
                <h3>
                    {{-- Arsha --}}
                    <img src="{{asset('startup-unpad/logo-publikasyik-asli.png')}}" alt="Publikasyik Footer" style = "width:350px;">

                </h3>
                <p style = "font-size:20px;">

                  - MENDAMPINGI PUBLIKASIMU -

                </p>
              </div>
  {{--
              <div class="col-lg-3 col-md-6 footer-links"> --}}
                {{-- <h4>Useful Links</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                </ul> --}}
              {{-- </div> --}}

              <div class="col-lg-4 col-md-6 footer-links">
                {{-- <h4>Our Services</h4>
                <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                </ul> --}}
              </div>

              <div class="col-lg-4 col-md-6 footer-links">
                <h4 style = "font-size:26px;">Sosial Media Kami :</h4>

                <div class="social-links">
                  <a href="#" class="twitter"><i class="bx bxl-whatsapp"></i></a>
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="https://www.instagram.com/publikasyik/" class="instagram"><i class="bx bxl-instagram"></i></a>
                  {{-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> --}}
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>

              </div>
            </div>
          </div>
        </div>

        <div class="container footer-bottom clearfix">
            <center>
          <div class="copyright">
            &copy; Copyright <strong><span>Publikasyik</span></strong
            >. All Rights Reserved
          </div>
      </center>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
            {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
          </div>
        </div>
      </footer>
      <!-- End Footer -->

      <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
      <div id="preloader"></div>

      <script>
        $(document).ready(async function () {
          await typeSentence("Mr. Stark, I don't feel so good..", "#sentence");
          await waitForMs(2000);
          deleteSentence("#sentence");
        });
      </script>

      <script>
  document.addEventListener('DOMContentLoaded',function(event){
    // array with texts to type in typewriter
    var dataText = [ "Selamat Datang Di Publikasyik !", "Nikmati Layanan Kami!", "Selamat Datang Di Publikasyik !", "Publikasyik, Memang Terpercaya !"];

    // type one text in the typwriter
    // keeps calling itself until the text is finished
    function typeWriter(text, i, fnCallback) {
      // chekc if text isn't finished yet
      if (i < (text.length)) {
        // add next character to h1
       document.querySelector("#selamatdatang").innerHTML = text.substring(0, i+1) +'<span aria-hidden="true"></span>';

        // wait for a while and call this function again for next character
        setTimeout(function() {
          typeWriter(text, i + 1, fnCallback)
        }, 100);
      }
      // text finished, call callback if there is a callback function
      else if (typeof fnCallback == 'function') {
        // call callback after timeout
        setTimeout(fnCallback, 700);
      }
    }
    // start a typewriter animation for a text in the dataText array
     function StartTextAnimation(i) {
       if (typeof dataText[i] == 'undefined'){
          setTimeout(function() {
            StartTextAnimation(0);
          }, 20000);
       }
       // check if dataText[i] exists
      if (i < dataText[i].length) {
        // text exists! start typewriter animation
       typeWriter(dataText[i], 0, function(){
         // after callback (and whole text has been animated), start next text
         StartTextAnimation(i + 1);
       });
      }
    }
    // start the text animation
    StartTextAnimation(0);
  });



      </script>



  <script>

  function myFunction(x) {
    if (x.matches) { // If media query matches
      center.appendChild(kartu);

    } else {
  //    document.body.style.backgroundColor = "pink";
    }
  }

  var x = window.matchMedia("(max-width: 700px)");
  var center = document.createElement("center");
  var kartu = document.getElementsByClassName('card');
  myFunction(x) // Call listener function at run time
  x.addListener(myFunction) // Attach listener function on state changes

  </script>




      <!-- Vendor JS Files -->
      <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
      {{-- <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script> --}}
      <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
      <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
      <script src="{{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
      <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
      <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

      <!-- Template Main JS File -->
      <script src="{{asset('assets/js/main.js')}}"></script>
    </body>
  </html>
