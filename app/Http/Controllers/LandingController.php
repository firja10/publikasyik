<?php

namespace App\Http\Controllers;
use App\Models\Paper;
use App\Models\Jurnal;
use App\Models\Seminar;
use Illuminate\Http\Request;

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



}
