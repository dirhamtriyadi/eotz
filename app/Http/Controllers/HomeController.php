<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Ternak;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {
            // $artikels = Artikel::where('judul', 'like', '%' . $request->search . '%')
            //     ->orWhere('isi', 'like', '%' . $request->search . '%')
            //     ->get();
            $artikels = Artikel::latest()->get();

            $ternaks = Ternak::where('nomor_ring', 'like', '%' . $request->search . '%')
                ->orWhere('seri_burung', 'like', '%' . $request->search . '%')
                ->get();
        } else {
            $artikels = Artikel::latest()->get();
            $ternaks = Ternak::latest()->get();
        }

        return view('index', [
            'artikels' => $artikels,
            'ternaks' => $ternaks,
            'search' => $request->search
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
