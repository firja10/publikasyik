<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $seminar = Seminar::all();
        return view('admin/daftar-seminar', compact('seminar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin/daftar-seminar');
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




        $data = new Seminar;

        if($request->hasFile('poster_seminar')){
            $filename = $request["poster_seminar"]->getClientOriginalName();

            if( $data->poster_seminar ){
                Storage::delete('/public/storage/Seminar/'.$data->file);
            }
            $request["poster_seminar"]->storeAs('Seminar', $filename, 'public');
        }else{
            $filename=$data->poster_seminar;
        }


        $data->poster_seminar = $filename;
        $data->judul_seminar = $request['judul_seminar'];
        $data->deskripsi_seminar = $request['deskripsi_seminar'];
        $data->link_seminar = $request['link_seminar'];
        $data->tanggal_seminar = $request['tanggal_seminar'];
        // $data->tanggal_seminar = $request['nomor_seminar'];

        $data->save();


        return redirect('/admin/daftar-seminar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function show(Seminar $seminar, $id)
    {
        //
        $seminar = Seminar::findOrFail($id);
        return view('admin/daftar-seminar',compact('seminar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function edit(Seminar $seminar, $id)
    {
        //
        $seminar = Seminar::findOrFail($id);
        return view('admin/edit-daftar-seminar',compact('seminar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seminar $seminar, $id)
    {
        //

        if($request->hasFile('poster_seminar')){
            $filename = $request["poster_seminar"]->getClientOriginalName();

            if( Seminar::find($id)->file ){
                Storage::delete('/public/storage/seminar/'.Seminar::find($id)->file);
            }
            $request["poster_seminar"]->storeAs('seminar', $filename, 'public');
        }else{
            $filename=seminar::find($id)->file;
        }

    $seminar = Seminar::where('id', $id)->update([

            'poster_seminar' => $filename,
            // 'poster_seminar' => $request['poster_seminar'],
            'judul_seminar' => $request['judul_seminar'],
            'link_seminar' => $request['link_seminar'],
            'deskripsi_seminar' => $request['deskripsi_seminar'],
            'tanggal_seminar' => $request['tanggal_seminar'],
            // 'nomor_seminar' => $request['nomor_seminar'],

        ]);



        return redirect('/admin/daftar-seminar');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Seminar  $seminar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seminar $seminar, $id)
    {
        //
        $seminar = Seminar::findOrFail($id);
        $seminar->delete();
        return redirect('/admin/daftar-seminar');

    }
}
