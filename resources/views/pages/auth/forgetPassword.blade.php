@extends('pages.auth.template')

@section('title')
Masukkan Email Reset Password
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


                                @if ($message = Session::get('message'))
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
                                    <form class="user" action = "{{route('forget.password.post')}}" method = "POST">
                                        @csrf

                                        <div class="form-group">

                                            <label for="email" style = "color:#fff;">Email</label>
                                            <input type="email" class="form-control form-control-user"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="Email" name = "email">
                                        </div>
                                       
                                        <center>
                                            <button type = "submit" class="btn btn-success btn-user btn-block" name = "submit">
                                                Kirim Link Reset Password
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