<?php

namespace App\Http\Controllers;

use App\Models\Ppt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ppt = Ppt::all();
        return view('admin.daftar-ppt', compact('ppt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.daftar-ppt');
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
        $data = new Ppt;

        if($request->hasFile('gambar_ppt'))
        {
            $namafile = $request['gambar_ppt']->getClientOriginalName();

            if($data->gambar_ppt)
            {
                Storage::delete('/public/storage/Ppt/'.$namafile);
            }

            $request['gambar_ppt']->storeAs('Ppt',$namafile,'public');

        }

        else{
            $namafile=$data->gambar_ppt;
        }

        $data->gambar_ppt = $namafile;
        $data->nama_ppt = $request['nama_ppt'];
        $data->deskripsi_ppt = $request['deskripsi_ppt'];
        $data->harga_ppt = $request['harga_ppt'];
        $data->materi_ppt = $request['materi_ppt'];
        $data->save();
        return redirect('/admin/daftar-ppt');
    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ppt  $ppt
     * @return \Illuminate\Http\Response
     */
    public function show(Ppt $ppt, $id)
    {
        //
        $ppt = Ppt::findOrFail($id);
        return view('admin.daftar-ppt', compact('ppt'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ppt  $ppt
     * @return \Illuminate\Http\Response
     */
    public function edit(Ppt $ppt, $id)
    {
        //
        $ppt = Ppt::findOrFail($id);
        return view('admin.daftar-ppt', compact('ppt'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ppt  $ppt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ppt $ppt, $id)
    {
        //






        if($request->hasFile('gambar_ppt')){
            $filename = $request["gambar_ppt"]->getClientOriginalName();

            if( Ppt::find($id)->gambar_ppt ){
                Storage::delete('/public/storage/Festival/'.Ppt::find($id)->gambar_ppt);
            }
            $request["gambar_ppt"]->storeAs('Festival', $filename, 'public');
        }else{
            $filename=Ppt::find($id)->gambar_ppt;
        }

    $festival = Ppt::where('id', $id)->update([

            'gambar_ppt' => $filename,
            // 'gambar_ppt' => $request['gambar_ppt'],
            'nama_ppt' => $request['nama_ppt'],
            'materi_ppt' => $request['materi_ppt'],
            'deskripsi_ppt' => $request['deskripsi_ppt'],
            'harga_ppt' => $request['harga_ppt'],
            // 'tanggal_akhir_paper' => $request['tanggal_akhir_paper'],
        ]);




        return redirect('admin/daftar-ppt')->with('update-ppt','Data Berhasil Terupdate');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ppt  $ppt
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ppt $ppt, $id)
    {
        //
        $ppt = Ppt::findOrFail($id);
        $ppt->delete();
        return redirect('/admin/daftar-ppt')->with('ppt-delete','Data Berhasil Dihapus');
    }
}
