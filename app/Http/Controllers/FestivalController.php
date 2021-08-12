<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FestivalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $festival = Festival::all();
        return view('admin.daftar-festival',compact('festival'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.daftar-festival');
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
        $data = new Festival;

        if($request->hasFile('gambar_festival'))
        {
            $namafile = $request['gambar_festival']->getClientOriginalName();

            if($data->gambar_festival)
            {
                Storage::delete('/public/storage/Festival/'.$namafile);
            }

            $request['gambar_festival']->storeAs('Festival',$namafile,'public');

        }

        else{
            $namafile=$data->gambar_festival;
        }

        $data->gambar_festival = $namafile;
        $data->nama_festival = $request['nama_festival'];
        $data->deskripsi_festival = $request['deskripsi_festival'];
        $data->harga_festival = $request['harga_festival'];
        $data->materi_festival = $request['materi_festival'];
        $data->link_festival = $request['link_festival'];
        $data->tanggal_mulai = $request['tanggal_mulai'];
        $data->tanggal_berakhir = $request['tanggal_berakhir'];
        $data->save();
        return redirect('/admin/daftar-festival');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Festival  $festival
     * @return \Illuminate\Http\Response
     */
    public function show(Festival $festival, $id)
    {
        //
        $festival = Festival::findOrFail($id);
        return view('admin.daftar-festival', compact('festival'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Festival  $festival
     * @return \Illuminate\Http\Response
     */
    public function edit(Festival $festival, $id)
    {
        //
        $festival = Festival::findOrFail($id);
        return view('admin.edit-daftar-festival', compact('festival'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Festival  $festival
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Festival $festival, $id)
    {
        //





        if($request->hasFile('gambar_festival')){
            $filename = $request["gambar_festival"]->getClientOriginalName();

            if( Festival::find($id)->gambar_festival ){
                Storage::delete('/public/storage/Festival/'.Festival::find($id)->gambar_festival);
            }
            $request["gambar_festival"]->storeAs('Festival', $filename, 'public');
        }else{
            $filename=Festival::find($id)->gambar_festival;
        }

    $festival = Festival::where('id', $id)->update([

            'gambar_festival' => $filename,
            // 'gambar_festival' => $request['gambar_festival'],
            'nama_festival' => $request['nama_festival'],
            'materi_festival' => $request['materi_festival'],
            'deskripsi_festival' => $request['deskripsi_festival'],
            'harga_festival' => $request['harga_festival'],
            'link_festival' => $request['link_festival'],
            'tanggal_mulai' => $request['tanggal_mulai'],
            'tanggal_berakhir' => $request['tanggal_berakhir'],
            // 'tanggal_akhir_paper' => $request['tanggal_akhir_paper'],
        ]);




        return redirect('admin/daftar-festival')->with('update-festival','Data Berhasil Terupdate');






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Festival  $festival
     * @return \Illuminate\Http\Response
     */
    public function destroy(Festival $festival, $id)
    {
        //
        $festival = Festival::findOrFail($id);
        $festival->delete();
        return redirect('admin/daftar-festival')->with('delete-festival','Data Berhasil Terhapus');

    }
}
