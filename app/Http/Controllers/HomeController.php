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
        $ternaks = Ternak::latest()->get();

        return view('index', [
            'artikels' => $artikels,
            'ternaks' => $ternaks
        ]);
    }
}
