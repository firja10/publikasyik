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
        $paper = Paper::all();
        $jurnal = Jurnal::all();
        $seminar = Seminar::all();
        return view('daftar-pojok', compact('paper','jurnal','seminar'));
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






}
