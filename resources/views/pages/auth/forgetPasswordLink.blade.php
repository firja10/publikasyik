@extends('pages.auth.template')

@section('title')
    Reset Password
@endsection

@section('content')





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

                                <div class="p-5">
                                    <div class="text-center">
                                        <center>
                                        <img src="{{asset('startup-unpad/logo-publikasyik-asli.png')}}" alt="" style ="width:90%;">

                                    </center>
                                    <br>
                                       <h1 class="h4 text-yellow-900 mb-4" style = "color:#F1C21C;"> <strong>Reset Password</strong> </h1>
                                    </div>
                                    <form class="user" action = "{{route('reset.password.post')}}" method = "POST">
                                        @csrf

                                        <input type="hidden" name="token" value="{{ $token }}">

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

                                        <div class="form-group" style = "color:#ffff">
                                            <label for="password-confirm"> Konfirmasi Password</label>
                                            <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" required autocomplete="new-password" placeholder = "Konfirmasi Password">
                                        </div>
                                       
                                        <center>
                                            <button type = "submit" class="btn btn-success btn-user btn-block" name = "submit">
                                               Konfirmasi Reset Password
                                            </button>
                                        </center>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{url('/login')}}" style = "color:white;">Sudah Punya Akun ?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="{{url('/register')}}" style = "color:white;">Belum Mendaftar ?</a>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    




@endsection