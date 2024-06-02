<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikels = Artikel::latest()->get();

        return view('artikel.index', [
            'artikels' => $artikels
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|unique:artikel,judul,except,id',
            'isi' => 'required',
        ]);

        $validatedData['created_by'] = auth()->id();
        $validatedData['updated_by'] = auth()->id();

        $ternak = Artikel::create($validatedData);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);

        return view('artikel.edit', [
            'artikel' => $artikel
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required|unique:artikel,judul,except,id',
            'isi' => 'required',
        ]);

        $validatedData['updated_by'] = auth()->id();

        $artikel = Artikel::findOrFail($id);
        $artikel->update($validatedData);

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        $artikel->delete();

        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus');
    }
}
