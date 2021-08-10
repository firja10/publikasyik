<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Models\Eksekutif;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $materi = Materi::all();
        $eksekutif = Eksekutif::all();
        return view('admin.daftar-materi',compact('materi','eksekutif'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.daftar-materi');
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
        $data = new Materi;
        if($request->hasFile('gambar_materi'))
        {
            $filename = $request["gambar_materi"]->getClientOriginalName();

            if( $data->gambar_materi ){
                Storage::delete('/public/storage/Materi/'.$filename);
            }
            $request["gambar_materi"]->storeAs('Materi', $filename, 'public');
        }

        $data->gambar_materi = $filename;
        $data->nama_materi = $request['nama_materi'];
        $data->penjelasan_materi = $request['penjelasan_materi'];
        $data->referensi_materi = $request['referensi_materi'];
        $data->link_materi = $request['link_materi'];
        $data->save();
        return redirect('/admin/daftar-materi');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi,$id)
    {
        //
        $materi = Materi::findOrFail($id);
        return view('admin.edit-materi',compact('materi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi, $id)
    {
        //
        $materi = Materi::findOrFail($id);
        return view('admin.edit-materi',compact('materi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Materi $materi, $id)
    {
        //


        if($request->hasFile('gambar_materi')){
            $filename = $request["gambar_materi"]->getClientOriginalName();

            if( Materi::find($id)->gambar_materi ){
                Storage::delete('/public/storage/Materi/'.Materi::find($id)->gambar_materi);
            }
            $request["gambar_materi"]->storeAs('Materi', $filename, 'public');
        }else{
            $filename=Materi::find($id)->gambar_materi;
        }

    $materi = Materi::where('id', $id)->update([

            'gambar_materi' => $filename,
            // 'gambar_materi' => $request['gambar_materi'],
            'nama_materi' => $request['judul_materi'],
            'referensi_materi' => $request['referensi_materi'],
            'penjelasan_materi' => $request['penjelasan_materi'],
            'link_materi' => $request['link_materi'],

        ]);




        return redirect('admin/daftar-materi')->with('update-materi','Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Materi  $materi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi, $id)
    {
        //
        $materi = Materi::findOrFail($id);
        $materi->delete();
        return redirect('admin/daftar-materi')->with('delete-materi','Data Berhasil Dihapus');
    }
}
