<?php

namespace App\Http\Controllers;

use App\Models\Popbuku;
use App\Models\Buku;
use Illuminate\Http\Request;

class PopbukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $popbuku=Popbuku::all();
        $buku=Buku::all();
        return view ('popbuku.index', compact ('popbuku', 'buku'));
    }

    public function indexpop()
    {
        $popbuku=Popbuku::all();
        $buku=Buku::all();
        return view ('book.index', compact ('popbuku', 'buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buku=Buku::all();
        return view ('popbuku.create', compact ('buku'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'buku_id' => 'required',
        ]);

        $popbuku = new Popbuku;
        $popbuku->buku_id = $request->buku_id;
        $popbuku->save();
        return redirect('/popbuku');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $buku = Buku::all();
        $popbuku = Popbuku::findOrFail($id);
        return view('popbuku.show', compact('popbuku', 'buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $buku = Buku::all();
        $popbuku = Popbuku::findOrFail($id);
        return view('popbuku.edit', compact('popbuku', 'buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'buku_id' => 'required',
        ]);

        $popbuku = Popbuku::findOrFail($id);
        $popbuku->buku_id = $request->buku_id;
        $popbuku->save();
        return redirect('/popbuku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $popbuku = Popbuku::findOrFail($id);
        $popbuku->delete();
        return redirect()->route('popbuku.index');
    }
}
