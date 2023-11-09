<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku=Buku::all();
        return view ('buku.index', compact ('buku'));
    }

    public function index2()
    {
        $buku=Buku::all();
        return view ('book.index', compact ('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'gambar' => 'required',
            'judul' => 'required',
            'creator' => 'required',
            'genre' => 'required',
            'penerbit' => 'required',
            'ttb' => 'required',
            'tbl_buku' => 'required',
            'harga' => 'required',
            'no_edisi' => 'required',
            'sinopsis' => 'required',
        ]);

        $buku = new Buku;
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/buku/', $name);
            $buku->gambar = $name;
        } 
            $buku->judul = $request->judul;
            $buku->creator = $request->creator;
            $buku->genre = $request->genre;
            $buku->penerbit = $request->penerbit;
            $buku->ttb = $request->ttb;
            $buku->tbl_buku = $request->tbl_buku;
            $buku->harga = $request->harga;
            $buku->no_edisi = $request->no_edisi;
            $buku->sinopsis = $request->sinopsis;
            $buku->save();
            return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));
    }

    public function detail($id)
    {
        $buku = Buku::findOrFail($id);
        return view('book.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'gambar' => 'required',
            'judul' => 'required',
            'creator' => 'required',
            'genre' => 'required',
            'penerbit' => 'required',
            'ttb' => 'required',
            'tbl_buku' => 'required',
            'harga' => 'required',
            'no_edisi' => 'required',
            'sinopsis' => 'required',
        ]);

        $buku = Buku::findOrFail($id);
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/buku/', $name);
            $buku->gambar = $name;
        } 
            $buku->judul = $request->judul;
            $buku->creator = $request->creator;
            $buku->genre = $request->genre;
            $buku->penerbit = $request->penerbit;
            $buku->ttb = $request->ttb;
            $buku->tbl_buku = $request->tbl_buku;
            $buku->harga = $request->harga;
            $buku->no_edisi = $request->no_edisi;
            $buku->sinopsis = $request->sinopsis;
            $buku->save();
            return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect()->route('buku.index');
    }

    public function cari(Request $request)
    {
        $keyword = $request->input('cari');

        // mengambil data dari table pegawai sesuai pencarian data
        $buku = Buku::where('judul', 'like', "%" . $keyword . "%")->paginate(10);

        // mengirim data pegawai ke view index
        return view('buku.index', compact('buku'));
    }
}
