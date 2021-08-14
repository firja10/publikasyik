<?php

namespace App\Http\Controllers;

use App\Models\Daftarfestival;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DaftarfestivalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $daftarfestival = Daftarfestival::paginate(5);
        return view('admin.daftar-peserta-festival',compact('daftarfestival'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.daftar-peserta-festival');
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
            $data = new Daftarfestival;

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
            return redirect('/daftar-festival')->with('daftar-festival','Anda Berhasil terdaftar');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Daftarfestival  $daftarfestival
     * @return \Illuminate\Http\Response
     */
    public function show(Daftarfestival $daftarfestival, $id)
    {
        //
        $daftarfestival = Daftarfestival::findOrFail($id);
        return view('admin.edit-daftar-peserta-festival',compact('daftarfestival'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Daftarfestival  $daftarfestival
     * @return \Illuminate\Http\Response
     */
    public function edit(Daftarfestival $daftarfestival, $id)
    {
        //

        $daftarfestival = Daftarfestival::findOrFail($id);
        return view('admin.edit-daftar-peserta-festival',compact('daftarfestival'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Daftarfestival  $daftarfestival
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Daftarfestival $daftarfestival, $id)
    {


        if($request->hasFile('gambar_festival')){
            $filename = $request["gambar_festival"]->getClientOriginalName();

            if( Daftarfestival::find($id)->gambar_festival ){
                Storage::delete('/public/storage/Festival/'.Daftarfestival::find($id)->gambar_festival);
            }
            $request["gambar_festival"]->storeAs('Festival', $filename, 'public');
        }else{
            $filename=Daftarfestival::find($id)->gambar_festival;
        }
        //
        $daftarfestival = Daftarfestival::where('id',$id)->update([
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

        return redirect('/admin/daftar-peserta-festival')->with('daftarfestival-update','Data Berhasil Diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Daftarfestival  $daftarfestival
     * @return \Illuminate\Http\Response
     */
    public function destroy(Daftarfestival $daftarfestival, $id)
    {
        //
        $daftarfestival = Daftarfestival::findOrFail($id);
        $daftarfestival->delete();
        return redirect('/admin/daftar-peserta-festival')->with('daftarfestival-delete','Data Berhasil Dihapus');

    }
}
