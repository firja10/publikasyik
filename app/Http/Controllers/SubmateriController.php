<?php

namespace App\Http\Controllers;

use App\Models\Submateri;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubmateriController extends Controller
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
        $submateri = Submateri::all();
        return view('admin.daftar-submateri',compact('submateri','materi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.daftar-submateri');
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
        $data = new Submateri;
        if($request->hasFile('gambar_submateri'))
        {
            $filename = $request["gambar_submateri"]->getClientOriginalName();

            if( $data->gambar_submateri ){
                Storage::delete('/public/storage/Materi/'.$filename);
            }
            $request["gambar_submateri"]->storeAs('Submateri', $filename, 'public');
        }

        $data->gambar_submateri = $filename;
        $data->nama_submateri = $request['nama_submateri'];
        $data->penjelasan_submateri = $request['penjelasan_submateri'];
        $data->referensi_submateri = $request['referensi_submateri'];
        $data->link_submateri = $request['link_submateri'];
        $data->save();
        return redirect('/admin/daftar-submateri')->with('data-store','Data Berhasil distore');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Submateri  $submateri
     * @return \Illuminate\Http\Response
     */
    public function show(Submateri $submateri, $id)
    {
        //
        $submateri = Submateri::findOrFail($id);
        return view('admin.edit-daftar-submateri',compact('submateri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Submateri  $submateri
     * @return \Illuminate\Http\Response
     */
    public function edit(Submateri $submateri, $id)
    {
        //
        $submateri = Submateri::findOrFail($id);
        return view('admin.edit-daftar-submateri',compact('submateri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Submateri  $submateri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submateri $submateri, $id)
    {
        //
        if($request->hasFile('gambar_submateri')){
            $filename = $request["gambar_submateri"]->getClientOriginalName();

            if( Submateri::find($id)->gambar_submateri ){
                Storage::delete('/public/storage/Submateri/'.Submateri::find($id)->gambar_submateri);
            }
            $request["gambar_submateri"]->storeAs('Submateri', $filename, 'public');
        }else{
            $filename=Submateri::find($id)->gambar_submateri;
        }

    $materi = Submateri::where('id', $id)->update([

            'gambar_submateri' => $filename,
            // 'gambar_submateri' => $request['gambar_submateri'],
            'nama_submateri' => $request['nama_submateri'],
            'referensi_submateri' => $request['referensi_submateri'],
            'penjelasan_submateri' => $request['penjelasan_submateri'],
            'link_submateri' => $request['link_submateri'],
            'materi_id' =>$request['materi_id'],

        ]);




        return redirect('admin/daftar-submateri')->with('update-submateri','Data Berhasil Terupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Submateri  $submateri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submateri $submateri, $id)
    {
        //
        $submateri = Submateri::findOrFail($id);
        $submateri->delete();
        return redirect('/admin/daftar-submateri')->with('delete-submateri','Data Berhasil Dihapus');
    }
}
