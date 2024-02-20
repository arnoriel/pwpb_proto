<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Buku;
use App\Models\Popbuku;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting=Setting::all();
        return view ('setting.index', compact ('setting'));
    }

    public function indexset()
    {
        $setting=Setting::all();
        return view ('beranda.index', compact ('setting'));
    }

    public function setbook()
    {
        $setting=Setting::all();
        $popbuku=Popbuku::all();
        $buku=Buku::all();
        return view ('book.index', compact ('setting', 'popbuku', 'buku'));
    }

    public function masterset()
    {
        $setting=Setting::all();
        return view ('layouts.user', compact ('setting'))->with('setting', $setting);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'aplikasi' => 'required',
            'gambar' => 'required',
            'info' => 'required',
            'bio' => 'required',
         ]);

         $setting = new Setting;
         $setting->aplikasi = $request->aplikasi;
         if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/aset/', $name);
            $setting->gambar = $name;
            } 
        $setting->info = $request->info;
        $setting->bio = $request->bio;
        $setting->save();
        return redirect()->route('setting.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $setting = Setting::findOrFail($id);
        // return view('book.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        return view('setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
           'aplikasi' => 'required',
           'gambar' => 'required',
           'info' => 'required',
           'bio' => 'required',
        ]);

        $setting = Setting::findOrFail($id);
        $setting->aplikasi = $request->aplikasi;
        if ($request->hasFile('gambar')) {
           $image = $request->file('gambar');
           $name = rand(1000, 9999) . $image->getClientOriginalName();
           $image->move('images/aset/', $name);
           $setting->gambar = $name;
           } 
       $setting->info = $request->info;
       $setting->bio = $request->bio;
       $setting->save();
       return redirect()->route('setting.index');
   }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $setting = setting::findOrFail($id);
        $setting->delete();
        return redirect()->route('setting.index');
    }
}
