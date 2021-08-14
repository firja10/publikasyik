<?php

namespace App\Http\Controllers;

use App\Models\Jurnal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JurnalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jurnal = Jurnal::paginate(5);
        return view('admin/daftar-jurnal', compact('jurnal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/daftar-jurnal');
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





        $data = new Jurnal;

        if($request->hasFile('poster_jurnal')){
            $filename = $request["poster_jurnal"]->getClientOriginalName();

            if( $data->file ){
                Storage::delete('/public/storage/Jurnal/'.$data->file);
            }
            $request["poster_jurnal"]->storeAs('Jurnal', $filename, 'public');
        }else{
            $filename=$data->file;
        }



        $data->judul_jurnal = $request['judul_jurnal'];
        $data->deskripsi_jurnal = $request['deskripsi_jurnal'];
        $data->link_jurnal = $request['link_jurnal'];
        $data->tanggal_jurnal = $request['tanggal_jurnal'];
        $data->tanggal_jurnal = $request['nomor_jurnal'];

        $data->save();


        return redirect('/admin/daftar-jurnal');






    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function show(Jurnal $jurnal, $id)
    {
        //

        $jurnal = Jurnal::findOrFail($id);
        return view('admin/daftar-jurnal',compact('jurnal'));



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jurnal $jurnal, $id)
    {
        //

        $jurnal = Jurnal::findOrFail($id);
        return view('admin.edit-daftar-jurnal',compact('jurnal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurnal $jurnal, $id)
    {
        //




        if($request->hasFile('poster_jurnal')){
            $filename = $request["poster_jurnal"]->getClientOriginalName();

            if( Jurnal::find($id)->file ){
                Storage::delete('/public/storage/Jurnal/'.Jurnal::find($id)->file);
            }
            $request["poster_jurnal"]->storeAs('Jurnal', $filename, 'public');
        }else{
            $filename=Jurnal::find($id)->file;
        }

    $jurnal = Jurnal::where('id', $id)->update([

            'poster_jurnal' => $filename,
            // 'poster_Jurnal' => $request['poster_Jurnal'],
            'judul_jurnal' => $request['judul_jurnal'],
            'link_jurnal' => $request['link_jurnal'],
            'deskripsi_jurnal' => $request['deskripsi_jurnal'],
            'tanggal_jurnal' => $request['tanggal_jurnal'],
            'nomor_jurnal' => $request['nomor_jurnal'],

        ]);



        return redirect('/admin/daftar-jurnal');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jurnal  $jurnal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurnal $jurnal, $id)
    {
        //
        $jurnal = Jurnal::findOrFail($id);
        $jurnal->delete();
        return redirect('/admin/daftar-jurnal');


    }
}
