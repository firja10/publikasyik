@extends('user.template.app')
{{-- @extends('template.template') --}}

@section('title')

Akses Kelas

@endsection


@section('style')

<style>

/* #tagihan-anda a {
    background-color: white;
}

#tagihan-anda a span {
    color: #AD3221;
}

#tagihan-anda a i{
    color: #AD3221;
} */


</style>


@endsection





@section('button')

{{-- <button href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" type="button" data-toggle="modal" data-target="#exampleModal"><i
    class="fas fa-plus fa-sm text-white-50" ></i> Tambah Data</button> --}}
@endsection




@section('content')

<br>
<br>
<br>
<br>


    <div class="container-fluid" data-aos="fade-up">
      <div class="section-title">
        {{-- <h2>Daftar Riwayat Kelas Anda</h2> --}}
    </div>
    <br>






     <!-- DataTales Example -->
     <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-danger">Akses Kelas Anda</h3>
        </div>
        <div class="card-body">




            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Informasi Kelas</a>
                  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Materi</a>
                  <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Link Pertemuan</a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" style = "margin-top:20px;margin-left:10px;">
                    <ul style = "margin-bottom:5px;">
                        <li style = "margin-bottom:10px;"> Kelas : {{$pemesanan->nama_kelas}} </li>
                        <li style = "margin-bottom:10px;">Tanggal Mulai Kelas : 16 Agustus 2021</li>
                        <li style = "margin-bottom:10px;">Tanggal Selesai Kelas : 16 September 2021</li>
                        <li style = "margin-bottom:10px;">Mentor :</li>
                        <li style = "margin-bottom:10px;">Link Grup Diskusi : <a href="" class = "btn btn-warning"> Grup Diskusi</a> </li>
                    </ul>
                    {{-- <p>Tanggal Mulai Kelas : 16 Agustus 2021</p>
                    <p>Tanggal Selesai Kelas : 16 September 2021</p>
                    <p>Mentor : </p>
                    <p>Link Grup Diskusi :  </p> --}}

                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" style = "margin-top:20px;margin-left:10px; margin-right:10px;">


                    <ul style = "list-style-type: none;" >



{{--
                        <li> <div class="alert alert-primary">Materi 1 </div>
                            <ul>
                                <li style = "margin-bottom:10px;"> <a href="">Sub Materi 1</a> </li>
                                <li style = "margin-bottom:10px;"> <a href="">Sub Materi 2</a> </li>
                            </ul>
                        </li>
                    </ul>

                    <ul style = "list-style-type: none;" >
                        <li> <div class="alert alert-primary">Materi 2</div>
                            <ul>
                                <li style = "margin-bottom:10px;"> <a href="">Sub Materi 1</a> </li>
                            </ul>
                        </li> --}}

                        @foreach ( $datamateri as $datamateris )
                              <li> <div class="alert alert-primary">{{$datamateris->nama_materi}} </div>

                                <ul>
                                @foreach ( $datamateris->submateri as $submateris )
                                    <li style = "margin-bottom:10px;"> <a href="">{{$submateris->nama_submateri}}</a> </li>
                                @endforeach

                                </ul>




                            </li>
                        @endforeach


                    </ul>




                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" style = "margin-top:20px;margin-left:10px; margin-right:10px;">


                    <ul style = "list-style-type: none;" >
                        @foreach ($datamateri as $datamat )
                        <li> <div class="alert alert-primary"> {{$datamat->nama_materi}}</div>
                            <ul>
                                @foreach ($datamat->submateri as $submat )
                                <li style = "margin-bottom:10px;"> <a href="">{{$submat->link_submateri}}</a> </li>
                                @endforeach

                            </ul>
                        </li>
                        @endforeach
                    </ul>











                </div>
              </div>





        </div>
    </div>














</div>



    <br><br><br>









@endsection

