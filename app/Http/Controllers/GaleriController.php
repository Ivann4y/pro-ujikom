<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use App\Http\Requests\StoreGaleriRequest;
use App\Http\Requests\UpdateGaleriRequest;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Home';
        $foto = Galeri::where('id_user', auth()->id())->get();
        return view('main.home', compact('title', 'foto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('main.create',[
            'title' => 'New Image'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGaleriRequest $request)
    {
        $photo=$request->file('photo');
        // dd($photo);

        $data=[
            'id_user' => auth()->id(),
            'id_album' => 1,
            'nama_foto' => $photo->getClientOriginalName(),
            'judul_foto' => request('title'),
            'deskripsi' => request('deskripsi'),
            'path_foto' => $photo->store('users/' . auth()->id())
        ];

        Galeri::create($data);
        session()->flash('Berhasil', 'Berhasil menambahkan gambar');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Galeri $id_foto)
    {
        $foto = $id_foto;
        $title = 'Detail Foto';

        return view('main.detailfoto', compact('foto', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Galeri $galeri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGaleriRequest $request, Galeri $galeri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Galeri $id_foto)
    {
        $foto = $id_foto;
        Storage::delete($foto->id_foto);
        $foto->destroy($foto->id_foto);

        session()->flash('Berhasil', 'Behasil menghapus foto');
        return redirect('/');
    }
}
