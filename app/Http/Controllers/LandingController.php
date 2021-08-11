<?php

namespace App\Http\Controllers;
use App\Models\Paper;
use App\Models\Jurnal;
use App\Models\Seminar;
use App\Models\Eksekutif;
use App\Models\Festival;
use App\Models\Ppt;
use App\Models\Pemesanan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Materi;
use App\Models\Submateri;
use App\Models\User;
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

    // public function riwayatkelas()
    // {
    //     # code...
    //     $eksekutif = Eksekutif::all();
    //     return view('user.daftar-eksekutif',compact('eksekutif'));

    // }

    // public function daftarkelasbaru()
    // {
    //     # code...
    //     $eksekutif = Eksekutif::all();
    //     return view('user.daftar-eksekutif-baru',compact('eksekutif'));

    // }


    public function riwayatkelas(){

        $pemesanan = new Pemesanan;
        $user_id = Auth::id();
        $data = $pemesanan->where('user_id',$user_id)->get();
        return view('user.daftar-eksekutif',compact('data'));

    }







    public function daftarkelasbaru()
    {
        # code...
        $eksekutif = Eksekutif::all();
        return view('user.daftar-eksekutif-baru',compact('eksekutif'));

    }







    public function daftarkelasbaruspesifik($id, Eksekutif $eksekutif)
    {
        # code...
        $pemesanan = New Pemesanan;
        $eksekutif = Eksekutif::findOrFail($id);
        $data = $pemesanan->where('kelas_id', $eksekutif);
        return view('user.daftar-eksekutif-baru-spesifik',compact('eksekutif','data'));

    }



    public function pemesananstore( Request $request)
    {
        # code...
        $user_id = Auth::id();
        $data = new Pemesanan;
        $data->nama_kelas = $request['nama_kelas'];
        $data->deskripsi_kelas = $request['deskripsi_kelas'];
        $data->materi_kelas = $request['materi_kelas'];
        $data->grup_kelas = $request['grup_kelas'];
        $data->harga_kelas = $request['harga_kelas'];
        $data->metode_pembayaran = $request['metode_pembayaran'];
        $data->user_id = $user_id;
        $data->status_pembayaran = 1;
        $data->save();

        return redirect('/user/riwayat-kelas')->with('pemesanan-kelas','data berhasil diupdate');
    }















    public function pembayarananda()
    {
        # code...
        $eksekutif = Eksekutif::all();
        return view('user.daftar-eksekutif-baru',compact('eksekutif'));

    }




    public function langganan()
    {
        # code...
        $pemesanan = Pemesanan::all();
        return view('admin.daftar-langganan',compact('pemesanan'));
    }

    public function tagihananda()
    {
        # code...
        $pemesanan = new Pemesanan;
        $user_id = Auth::id();
        $datasaya = $pemesanan->where('user_id',$user_id);
        $data = $datasaya->where('status_pembayaran',1)->get();
        return view('user.daftar-tagihan-anda',compact('data'));
    }



    public function akseskelas($id, Eksekutif $eksekutif)
    {
        # code...
        $materi = new Materi;

        $pemesanan = new Pemesanan;
        $eksekutif = Eksekutif::findOrFail($id);
        $user_id = Auth::id();

        $datamateri = $materi->where('kelas_id', $eksekutif);
        $datakelas = $pemesanan->where('user_id',$user_id);
        // $datasubmateri = $submateri->where('materi_id',$materi_id)->get();

        return view('user.akses-kelas', compact('eksekutif','datamateri','datakelas','user_id'));

    }








    public function konfirmasibayar(Request $request, $id, Pemesanan $pemesanan)
    {
        $pemesanan = Pemesanan::where('id', $id)->update([


            // 'poster_Jurnal' => $request['poster_Jurnal'],
            'status_pembayaran' => 2,

        ]);

        return redirect('/admin/daftar-langganan')->with('berhasil-bayar','Sudah Dikonfirmasi');
    }




}
