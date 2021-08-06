@extends('template.template')

@section('title')
Daftar Kelas Eksekutif
@endsection

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






        <div class="col-lg-12">

        <table class = 'table' style = "background-color:#AD3221 ;">
            {{-- <thead>
                <tr>
                    <th>No</th>
                 </tr>
            </thead> --}}
            <tbody>

                @foreach ( $eksekutif as $kelas )

                <tr  style = "border-bottom:100px solid white; ">

                    <th scope = "row">
                      <center>
                      <img src="{{asset('storage/Eksekutif/'. $kelas->gambar_kelas)}}" alt="" style = "text-align: center;width:70%; padding-bottom:30px;padding-top:30px;">
                    </center>
                    </td>

                    <td>
                      <center>
                    <h1 style = "text-align: center; color:white; padding-top:20px;">{{$kelas->nama_kelas}}</h1>
                        <p style = "color:white;">{{$kelas->materi_kelas}}</p>


                            <a class="btn" style = "background-color:#F1C21C; margin-bottom:20px;">
                                <h2>
                             RP. {{$kelas->harga_kelas}}
                            </h2>
                            </a>

                      </center>
                    </td>

                    <td>
                      <center>
                        <a href="" class="btn btn-success" style = "margin-bottom:20px; margin-top:50px; margin-right:20px;margin-left:20px;">Daftar Kelas</a>
                      </center>
                    </td>


                </tr>

                @endforeach
            </tbody>
        </table>

        </div>






    </div>
</div>



    <br><br><br>





  </section>
  <!-- End Services Section -->








@endsection

