<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paper;
use App\Models\Jurnal;
use App\Models\Seminar;
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
        return view('admin.home');
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
