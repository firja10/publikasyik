<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paper;
use App\Models\Jurnal;
use App\Models\Seminar;
use App\Models\Eksekutif;
use App\Models\Festival;
use App\Models\Ppt;
use App\Models\Pemesanan;
use Illuminate\Support\Facades\Auth;
use App\Models\Materi;
use App\Models\Submateri;
use Illuminate\Support\Facades\DB;
use App\Models\Pesan;
use App\Models\Daftarfestival;

use Illuminate\Support\Facades\Storage;
use App\Models\User;




class HomeController extends Controller

{







    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

   /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {

        $user = DB::table('users')->count();
        $daftarfestival = DB::table('daftarfestivals')->count();
        $eksekutif = DB::table('eksekutifs')->count();
        $pesan = DB::table('pesans')->count();
        $pemesanan = DB::table('pemesanans')->count();
        $festival = DB::table('festivals')->count();

        return view('admin.home',compact('user','daftarfestival','eksekutif','pesan','pemesanan','festival'));
        // return view('admin.home');
    }










            /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jurnalindex()
    {
        //
        $jurnal = Jurnal::all();
        return view('daftar-pojok', compact('jurnal'));
    }











}
