<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pesan = Pesan::all();
        return view('admin.daftar-pesan',compact('pesan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.daftar-pesan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new Pesan;
        $data->nama = $request['nama'];
        $data->email = $request['email'];
        $data->judul_pesan = $request['judul_pesan'];
        $data->isi_pesan = $request['isi_pesan'];
        $data->save();
        return redirect('/admin/daftar-pesan')->with('store-pesan','Pesan Sudah Terkirim !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function show(Pesan $pesan, $id)
    {
        //
        $pesan = Pesan::findOrFail($id);
        return view('admin.edit-daftar-pesan',compact('pesan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pesan $pesan, $id)
    {
        //
        $pesan = Pesan::findOrFail($id);
        return view('admin.edit-daftar-pesan',compact('pesan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pesan $pesan, $id)
    {
        //
        $pesan = Pesan::where('id',$id)->update([
            'nama'=>$request['nama'],
            'email'=>$request['email'],
            'judul_pesan'=>$request['judul_pesan'],
            'isi_pesan'=>$request['isi_pesan'],
        ]);

        return redirect('/admin/daftar-pesan')->with('update-pesan','Data Sudah Berhasil diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pesan  $pesan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pesan $pesan, $id)
    {
        //
        $pesan = Pesan::findOrFail($id);
        $pesan->delete();
        return redirect('/admin/daftar-pesan')->with('hapus-pesan','Data Sudah Dihapus');
    }
}
