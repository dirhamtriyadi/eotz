<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Ternak;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $artikels = Artikel::latest()->get();
        $ternaks = Ternak::with('user')->latest()->get();

        return view('index', [
            'artikels' => $artikels,
            'ternaks' => $ternaks
        ]);
    }

    public function show_artikel($id)
    {
        $artikel = Artikel::findOrFail($id);

        return view('home.artikel', [
            'artikel' => $artikel
        ]);
    }
}
