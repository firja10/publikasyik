<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Login - PUBLIKASYIK</title>


    <style>


    </style>



    <!-- Custom fonts for this template-->
    <link href="{{asset('startup-unpad/publikasyik.png')}}" rel="icon" />
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon" />


    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->

    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">




</head>

{{-- <body class="bg-gradient-danger"> --}}
<body style = "background-color:#22405C;">
    <br><br> <br>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5" style = "background-color: rgba(255, 255, 255, 0.3);">
                    <div class="card-body p-0" >
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            {{-- <div class="col-lg-6 d-none d-lg-block bg-register-image"></div> --}}
                            <div class="col-lg-12">


                                @if ($message = Session::get('error'))
                                <div class="alert alert-warning">
                                    <span> <strong> {{$message}}</strong> </span>
                                </div>
                                @endif

                                @if ($message = Session::get('ubah'))
                                <div class="alert alert-success">
                                    <span> <strong> {{$message}}</strong> </span>
                                </div>
                                @endif

                                <div class="p-5">
                                    <div class="text-center">
                                        <center>
                                        <img src="{{asset('startup-unpad/logo-publikasyik-asli.png')}}" alt="" style ="width:90%;">

                                    </center>
                                    <br>
                                       <h1 class="h4 text-yellow-900 mb-4" style = "color:#F1C21C;"> <strong>LOGIN</strong> </h1>
                                    </div>
                                    <form class="user" action = "{{route('login')}}" method = "POST">
                                        @csrf

                                        <div class="form-group">

                                            <label for="email" style = "color:#fff;">Email</label>
                                            <input type="email" class="form-control form-control-user"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Email" name = "email">
                                        </div>
                                        <div class="form-group">
                                            <label for="password" style = "color:#fff;">Password</label>
                                            <input type="password" class="form-control form-control-user"
                                                id="password" placeholder="Password" name = "password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck" style = "color:white;">Ingat Saya ?</label>
                                            </div>
                                        </div>
                                        <button type = "submit" class="btn btn-success btn-user btn-block" name = "submit">
                                            Login
                                        </button>
                                        {{-- <hr> --}}
                                        {{-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> --}}
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{url('/forget-password')}}" style = "color:white;">Lupa Password ?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{url('/register')}}" style = "color:white;">Buatlah Akun !</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

</body>

</html>
