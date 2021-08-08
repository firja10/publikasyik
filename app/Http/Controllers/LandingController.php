<?php

namespace App\Http\Controllers;
use App\Models\Paper;
use App\Models\Jurnal;
use App\Models\Seminar;
use App\Models\Eksekutif;
use App\Models\Festival;
use App\Models\Ppt;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class LandingController extends Controller
{
    //





    public function semuaindex()
    {
        //
        $paper = Paper::all()->slice(0,4);
        $jurnal = Jurnal::all()->slice(0,4);
        $seminar = Seminar::all()->slice(0,4);
        return view('daftar-pojok', compact('paper','jurnal','seminar'));
    }







    public function daftarseminar()
    {
        # code...
        $seminar = Seminar::all();
        return view('daftar-seminar',compact('seminar'));

    }



    public function daftarjurnal()
    {
        # code...
        $jurnal = Jurnal::all();
        return view('daftar-jurnal',compact('jurnal'));

    }



    public function daftarpaper()
    {
        # code...
        $paper = Paper::all();
        return view('daftar-paper',compact('paper'));

    }



    public function daftarkelas()
    {
        # code...
        $eksekutif = Eksekutif::all();
        return view('daftar-kelas',compact('eksekutif'));
    }














    public function liateksekutif()
    {
        # code...
        $eksekutif = Eksekutif::all();
        return view('user.daftar-eksekutif',compact('eksekutif'));
    }



    public function liatfestival()
    {
        # code...
        $festival = Festival::all();
        return view('user.daftar-festival',compact('festival'));
    }


    public function liatppt()
    {
        # code...
        $ppt = Ppt::all();
        return view('user.daftar-ppt',compact('ppt'));
    }



    //HALAMAN USER

    public function indexuser()
    {
        # code...
        $eksekutif = Eksekutif::all();
        return view('user.dashboard',compact('eksekutif'));

    }

    public function riwayatkelas()
    {
        # code...
        $eksekutif = Eksekutif::all();
        return view('user.daftar-eksekutif',compact('eksekutif'));

    }

    public function daftarkelasbaru()
    {
        # code...
        $eksekutif = Eksekutif::all();
        return view('user.daftar-eksekutif-baru',compact('eksekutif'));

    }


    public function pembayarananda()
    {
        # code...
        $eksekutif = Eksekutif::all();
        return view('user.daftar-eksekutif-baru',compact('eksekutif'));

    }





}
