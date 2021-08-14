<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paper = Paper::paginate(5);
        return view('admin.daftar-paper', compact('paper'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.daftar-paper');

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


        $data = new Paper;

        if($request->hasFile('poster_paper')){
            $filename = $request["poster_paper"]->getClientOriginalName();

            if( $data->poster_paper ){
                Storage::delete('/public/storage/Paper/'.$filename);
            }
            $request["poster_paper"]->storeAs('Paper', $filename, 'public');
        }else{
            $filename=$data->poster_paper;
        }


        $data->poster_paper = $filename;
        $data->judul_paper = $request['judul_paper'];
        $data->deskripsi_paper = $request['deskripsi_paper'];
        $data->link_paper = $request['link_paper'];
        $data->tanggal_paper = $request['tanggal_paper'];
        $data->tanggal_akhir_paper = $request['tanggal_akhir_paper'];

        $data->save();


        return redirect('/admin/daftar-paper');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function show(Paper $paper, $id)
    {
        //


        $paper = Paper::findOrFail($id);
        return view('admin/daftar-paper',compact('paper'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function edit(Paper $paper, $id)
    {
        //
        $paper = Paper::findOrFail($id);
        return view('admin/edit-daftar-paper',compact('paper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paper $paper, $id)
    {
        //





        if($request->hasFile('poster_paper')){
            $filename = $request["poster_paper"]->getClientOriginalName();

            if( Paper::find($id)->poster_paper ){
                Storage::delete('/public/storage/Paper/'.Paper::find($id)->poster_paper);
            }
            $request["poster_paper"]->storeAs('Paper', $filename, 'public');
        }else{
            $filename=Paper::find($id)->poster_paper;
        }

    $paper = Paper::where('id', $id)->update([

            'poster_paper' => $filename,
            // 'poster_paper' => $request['poster_paper'],
            'judul_paper' => $request['judul_paper'],
            'link_paper' => $request['link_paper'],
            'deskripsi_paper' => $request['deskripsi_paper'],
            'tanggal_paper' => $request['tanggal_paper'],
            'tanggal_akhir_paper' => $request['tanggal_akhir_paper'],
        ]);




        return redirect('admin/daftar-paper')->with('update-paper','Data Berhasil Terupdate');






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paper  $paper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paper $paper, $id)
    {
        //
        $paper = Paper::findOrFail($id);
        $paper->delete();
        return redirect('admin/daftar-paper')->with('hapus-infokampus','Paper Sudah terhapus');
    }
}
