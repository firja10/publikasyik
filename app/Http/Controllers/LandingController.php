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
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Pesan;
use App\Models\Daftarfestival;
use Illuminate\Support\Facades\Storage;
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
        // $eksekutif = Eksekutif::all();
        $eksekutif = new Eksekutif;
        $user_id = Auth::id();

        $tagihans = DB::table('pemesanans')->where('status_pembayaran',1)->count();
        $pemesanans = DB::table('pemesanans')->where('user_id',$user_id)->count();
        $eksekutifs = DB::table('eksekutifs')->count();
        $kelas = $eksekutif->where('user_id', $user_id);
        return view('user.dashboard',compact('eksekutif','eksekutifs','pemesanans','tagihans','kelas'));

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
        // $daftarfestival = new Daftarfestival;
        $user_id = Auth::id();
        $data = $pemesanan->where('user_id',$user_id)->get();
        // $datafest = $daftarfestival->where('user_id',$user_id)->get();
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
        $user_name = Auth::user()->name;
        $data = new Pemesanan;
        $data->nama_kelas = $request['nama_kelas'];
        $data->deskripsi_kelas = $request['deskripsi_kelas'];
        $data->materi_kelas = $request['materi_kelas'];
        $data->grup_kelas = $request['grup_kelas'];
        $data->harga_kelas = $request['harga_kelas'];
        $data->metode_pembayaran = $request['metode_pembayaran'];
        $data->kelas_id = $request['kelas_id'];
        $data->user_id = $user_id;
        $data->user_name = $user_name;
        $data->status_pembayaran = 1;
        $data->link_grup_diskusi = $request['link_grup_diskusi'];
        $data->tanggal_mulai = $request['tanggal_mulai'];
        $data->tanggal_akhir = $request['tanggal_akhir'];
        $data->mentor = $request['mentor'];
        $data->sertifikat = $request['sertifikat'];
        $data->diskon = $request['diskon'];
        $data->save();

        return redirect('/user/riwayat-kelas')->with('pemesanan-kelas','Anda telah mendaftar kelas');
    }


    public function updatepemesanan(Request $request, $id, Pemesanan $pemesanan)
    {
        # code...

        if($request->hasFile('gambar_kelas')){
            $filename = $request["gambar_kelas"]->getClientOriginalName();

            if( Pemesanan::find($id)->gambar_kelas ){
                Storage::delete('/public/storage/Eksekutif/'.Pemesanan::find($id)->gambar_kelas);
            }
            $request["gambar_kelas"]->storeAs('Eksekutif', $filename, 'public');
        }else{
            $filename=Pemesanan::find($id)->gambar_kelas;
        }

    $pemesanan = Pemesanan::where('id', $id)->update([

            'gambar_kelas' => $filename,
            // 'gambar_kelas' => $request['gambar_kelas'],
            'nama_kelas' => $request['nama_kelas'],
            'materi_kelas' => $request['materi_kelas'],
            'deskripsi_kelas' => $request['deskripsi_kelas'],
            'harga_kelas' => $request['harga_kelas'],
            // 'tanggal_akhir_paper' => $request['tanggal_akhir_paper'],
            'link_grup_diskusi'  => $request['link_grup_diskusi'],
           'tanggal_mulai'  => $request['tanggal_mulai'],
            'tanggal_akhir'  => $request['tanggal_akhir'],
           'mentor'  => $request['mentor'],
            'sertifikat'  => $request['sertifikat'],
            'diskon'  => $request['diskon'],
        ]);




        return redirect('admin/daftar-eksekutif')->with('update-eksekutif','Data Berhasil Terupdate');
    }




    public function deletepemesanan($id, Pemesanan $pemesanan)
    {
        # code...
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->delete();
        return redirect('/admin/daftar-langganan')->with('pemesanan-delete'.'data berhasil dihapus');

    }



    public function batalkanpemesanan($id, Pemesanan $pemesanan)
    {
        # code...
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->delete();
        return redirect('/user/riwayat-kelas')->with('pemesanan-delete'.'data berhasil dihapus');

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
        $daftarfestival = new Daftarfestival;
        $user_id = Auth::id();
        $datasaya = $pemesanan->where('user_id',$user_id);
        $data = $datasaya->where('status_pembayaran',1)->get();

        $datafest = $daftarfestival->where('user_id',$user_id);
        $datadua = $datafest->where('status_pembayaran',1)->get();

        return view('user.daftar-tagihan-anda',compact('data','datadua'));
    }



    public function akseskelas($id, Pemesanan $pemesanan)
    {
        # code...
        $materi = new Materi;
        $submateri = new Submateri;
        // $pemesanan = new Pemesanan;
        $pemesanan = Pemesanan::findOrFail($id);
        // $eksekutif = Eksekutif::findOrFail($id);
        $user_id = Auth::id();


        // $datamateri = $materi->where('kelas_id', $pemesanan->kelas_id)->first();
        $datamateri = $materi->where('kelas_id', $pemesanan->kelas_id)->get();

        // $datasubmateri = $submateri->where('')


        // $datakelas = $pemesanan->where('user_id',$user_id)->get();
        // $datakelas = $pemesanan->where('user_id',$user_id)->first();
        // $datasubmateri = $submateri->where('materi_id',$materi_id)->get();

        // return view('user.akses-kelas', compact('eksekutif','datamateri','datakelas','user_id'));
        return view('user.akses-kelas', compact('pemesanan','datamateri'));

    }


    public function daftarfestivalbaruspesifik($id, Festival $festival)
    {
        # code...
        $daftarfestival = New Daftarfestival;
        $festival = Festival::findOrFail($id);
        $data = $daftarfestival->where('kelas_id', $festival);
        return view('user.daftar-peserta-festival-baru-spesifik',compact('festival','data'));

    }






    public function konfirmasibayarfestival(Request $request, $id, Daftarfestival $daftarfestival)
    {
        $daftarfestival = Daftarfestival::where('id', $id)->update([


            // 'poster_Jurnal' => $request['poster_Jurnal'],
            'status_pembayaran' => 2,

        ]);

        return redirect('/admin/daftar-peserta-festival')->with('berhasil-bayar','Sudah Dikonfirmasi');
    }




    public function konfirmasibayar(Request $request, $id, Pemesanan $pemesanan)
    {
        $pemesanan = Pemesanan::where('id', $id)->update([


            // 'poster_Jurnal' => $request['poster_Jurnal'],
            'status_pembayaran' => 2,

        ]);

        return redirect('/admin/daftar-langganan')->with('berhasil-bayar','Sudah Dikonfirmasi');
    }


    public function daftaruser()
    {
        # code...
        $user = User::all();
        return view('admin.daftar-user',compact('user'));
    }


    public function konfirmasiadmin($id, Request $request, User $user)
    {
        $user = User::where('id',$id)->update(
            [
                'is_admin' => 1,
            ]
            );

        return redirect('/admin/daftar-user')->with('berhasil-admin','user berhasil dijadikan admin');


    }

    public function hapususer($id, User $user)
    {
        # code...
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/admin/daftar-user')->with('hapus-user','User Sudah terhapus');
    }

    public function storepesan(Request $request)
    {
        # code...
        $data = new Pesan;
        $data->nama = $request['nama'];
        $data->email = $request['email'];
        $data->judul_pesan = $request['judul_pesan'];
        $data->isi_pesan = $request['isi_pesan'];
        $data->save();
        return redirect('/')->with('store-pesan','Pesan Sudah Terkirim !');

    }


    public function festivalindex()
    {
        # code...
        $festival = Festival::all();
        $hitung = DB::table('festivals')->count();
        return view('festival',compact('festival','hitung'));
    }

    // public function daftarfestival(Request $request)
    // {
    //     # code...
    //     $data = new Daftarfestival;
    //     $user_id = Auth::id();
    //     $user_name = Auth::user()->name;
    //     $data->nama_festival = $request['nama_festival'];
    //     $data->gambar_festival = $request['gambar_festival'];
    //     $data->deskripsi_festival = $request['deskripsi_festival'];
    //     $data->harga_festival = $request['harga_festival'];
    //     $data->materi_festival = $request['materi_festival'];
    //     $data->link_festival = $request['link_festival'];
    //     $data->tanggal_mulai = $request['tanggal_mulai'];
    //     $data->tanggal_berakhir = $request['tanggal_berakhir'];
    //     $data->status_pembayaran = 2;
    //     $data->user_id = $user_id;
    //     $data->user_name = $user_name;
    //     $data->save();
    //     return redirect('/daftar-festival')->with('daftarfestival-store','Anda Sudah Terdaftar');


    // }



    // public function daftarfestivalbayar(Request $request)
    // {
    //     # code...
    //     $data = new Daftarfestival;
    //     $user_id = Auth::id();
    //     $user_name = Auth::user()->name;
    //     $data->nama_festival = $request['nama_festival'];
    //     $data->gambar_festival = $request['gambar_festival'];
    //     $data->deskripsi_festival = $request['deskripsi_festival'];
    //     $data->harga_festival = $request['harga_festival'];
    //     $data->materi_festival = $request['materi_festival'];
    //     $data->link_festival = $request['link_festival'];
    //     $data->tanggal_mulai = $request['tanggal_mulai'];
    //     $data->tanggal_berakhir = $request['tanggal_berakhir'];
    //     $data->metode_pembayaran = $request['metode_pembayaran'];
    //     $data->status_pembayaran = 1;
    //     $data->user_id = $user_id;
    //     $data->user_name = $user_name;
    //     $data->save();
    //     return redirect('/daftar-festival')->with('daftarfestival-store','Anda Sudah Terdaftar');


    // }


    public function daftarfestivaluser(Request $request)
    {
        # code...
        $data = new Daftarfestival;
        $user_id = Auth::id();
        $user_name = Auth::user()->name;
        $data->nama_festival = $request['nama_festival'];
        $data->gambar_festival = $request['gambar_festival'];
        $data->deskripsi_festival = $request['deskripsi_festival'];
        $data->harga_festival = $request['harga_festival'];
        $data->materi_festival = $request['materi_festival'];
        $data->link_festival = $request['link_festival'];
        $data->tanggal_mulai = $request['tanggal_mulai'];
        $data->tanggal_berakhir = $request['tanggal_berakhir'];
        // $data->status_pembayaran = 2;
        $data->user_id = $user_id;
        $data->user_name = $user_name;
        $data->save();
        return redirect('user/daftar-festival-baru')->with('daftarfestivaluser-store','Anda Sudah Terdaftar');


    }


    public function daftarfestivaluserbayar(Request $request)
    {
        # code...
        $data = new Daftarfestival;
        $user_id = Auth::id();
        $user_name = Auth::user()->name;
        $data->nama_festival = $request['nama_festival'];
        $data->gambar_festival = $request['gambar_festival'];
        $data->deskripsi_festival = $request['deskripsi_festival'];
        $data->harga_festival = $request['harga_festival'];
        $data->materi_festival = $request['materi_festival'];
        $data->link_festival = $request['link_festival'];
        $data->tanggal_mulai = $request['tanggal_mulai'];
        $data->tanggal_berakhir = $request['tanggal_berakhir'];
        $data->metode_pembayaran = $request['metode_pembayaran'];
        $data->status_pembayaran = 1;
        $data->user_id = $user_id;
        $data->user_name = $user_name;
        $data->save();
        return redirect('user/daftar-festival-baru')->with('daftarfestivaluser-store','Anda Sudah Terdaftar');


    }







    public function festivaluserbaru()
    {
        # code...
        $festival = Festival::all();
        $hitung = DB::table('festivals')->count();
        return view('user.daftar-peserta-festival-baru',compact('festival','hitung'));

    }

    public function festivaluser()
    {
        # code...
        $daftarfestival = new Daftarfestival;
        $user_id = Auth::id();
        $data = $daftarfestival->where('user_id',$user_id)->get();
        return view('user.daftar-peserta-festival',compact('data'));

    }


    public function batalkanfestival($id, Daftarfestival $daftarfestival)
    {
        # code...
        $daftarfestival = Daftarfestival::findOrFail($id);
        $daftarfestival->delete();
        return redirect('user/riwayat-festival')->with('daftarfestival-hapus','Data Sudah Terhapus');

    }





}
