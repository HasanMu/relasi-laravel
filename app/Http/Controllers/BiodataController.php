<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;
use File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bio = Biodata::all();
        return view('biodata.index', compact('bio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('biodata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bio = new Biodata;

        $bio->nama = $request->nama;
        $bio->alamat = $request->alamat;
        $bio->tanggal_lahir = $request->tanggal_lahir;

        //Upload Foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/img/biodata/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $bio->foto = $filename;
        }

        $bio->save();

        toastr()->success('Data berhasil ditambahkan!', 'Data ditambah!');
        return redirect()->route('biodata.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bio = Biodata::findOrFail($id);

        return view('biodata.show', compact('bio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bio = Biodata::findOrFail($id);

        return view('biodata.edit', compact('bio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bio = Biodata::findOrFail($id);

        $bio->nama = $request->nama;
        $bio->alamat = $request->alamat;
        $bio->tanggal_lahir = $request->tanggal_lahir;

        //Upload Foto
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = public_path().'/assets/img/biodata/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);

            if ($bio->foto) {
                $old_gambar = $bio->foto;
                $filepath = public_path().DIRECTORY_SEPARATOR.'/assets/img/biodata/'.DIRECTORY_SEPARATOR.$bio->foto;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
                    //File sudah dihapus / tidak ada!
                }
            }
            $bio->foto = $filename;
        }

        $bio->save();

        toastr()->warning('Data berhasil diubah!', 'Data diubah');

        return redirect()->route('biodata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bio = Biodata::findOrFail($id);

        if ($bio->foto) {
            $old_gambar = $bio->foto;
            $filepath = public_path().DIRECTORY_SEPARATOR.'/assets/img/biodata/'.DIRECTORY_SEPARATOR.$bio->foto;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
                //File sudah dihapus / tidak ada!
            }
        }

        $bio->delete();

        toastr()->danger('Data berhasil dihapus!', 'Data dihapus');
        return redirect()->route('biodata.index');
    }
}
