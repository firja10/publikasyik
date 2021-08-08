<?php

namespace App\Http\Controllers;

use App\Models\Eksekutif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EksekutifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $eksekutif = Eksekutif::all();
        return view('admin.daftar-eksekutif', compact('eksekutif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.daftar-eksekutif');
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


        $data = new Eksekutif;

        if($request->hasFile('gambar_kelas'))
        {
            $namafile = $request['gambar_kelas']->getClientOriginalName();

            if($data->gambar_kelas)
            {
                Storage::delete('/public/storage/Eksekutif/'.$namafile);
            }

            $request['gambar_kelas']->storeAs('Eksekutif',$namafile,'public');

        }

        else{
            $namafile=$data->gambar_kelas;
        }

        $data->gambar_kelas = $namafile;
        $data->nama_kelas = $request['nama_kelas'];
        $data->deskripsi_kelas = $request['deskripsi_kelas'];
        $data->harga_kelas = $request['harga_kelas'];
        $data->materi_kelas = $request['materi_kelas'];
        $data->save();
        return redirect('/admin/daftar-eksekutif');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eksekutif  $eksekutif
     * @return \Illuminate\Http\Response
     */
    public function show(Eksekutif $eksekutif, $id)
    {
        //
        $eksekutif = Eksekutif::findOrFail($id);
        return view('admin.daftar-eksekutif', compact('eksekutif'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eksekutif  $eksekutif
     * @return \Illuminate\Http\Response
     */
    public function edit(Eksekutif $eksekutif, $id)
    {
        //
        $eksekutif = Eksekutif::findOrFail($id);
        return view('admin.edit-daftar-eksekutif', compact('eksekutif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eksekutif  $eksekutif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Eksekutif $eksekutif, $id)
    {
        //




        if($request->hasFile('gambar_kelas')){
            $filename = $request["gambar_kelas"]->getClientOriginalName();

            if( Eksekutif::find($id)->gambar_kelas ){
                Storage::delete('/public/storage/Eksekutif/'.Eksekutif::find($id)->gambar_kelas);
            }
            $request["gambar_kelas"]->storeAs('Eksekutif', $filename, 'public');
        }else{
            $filename=Eksekutif::find($id)->gambar_kelas;
        }

    $festival = Eksekutif::where('id', $id)->update([

            'gambar_kelas' => $filename,
            // 'gambar_kelas' => $request['gambar_kelas'],
            'nama_kelas' => $request['nama_kelas'],
            'materi_kelas' => $request['materi_kelas'],
            'deskripsi_kelas' => $request['deskripsi_kelas'],
            'harga_kelas' => $request['harga_kelas'],
            // 'tanggal_akhir_paper' => $request['tanggal_akhir_paper'],
        ]);




        return redirect('admin/daftar-eksekutif')->with('update-eksekutif','Data Berhasil Terupdate');






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eksekutif  $eksekutif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Eksekutif $eksekutif, $id)
    {
        //
        $eksekutif = Eksekutif::findOrFail($id);
        $eksekutif->delete();
        return redirect('/admin/daftar-eksekutif')->with('delete-eksekutif','Data Berhasil Dihapus');
    }
}
