<?php

namespace App\Http\Controllers;

use App\Models\Ternak;
use App\Models\Artikel;
use App\Models\Peternak;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ternak = Ternak::latest()->count();
        $artikel = Artikel::latest()->count();
        $peternak = Peternak::with('user')->count();
        $user = User::latest()->count();
        $peternakActive = Peternak::with('user')->whereHas('user', function($q) {
            $q->where('is_active', 1);
        })->count();
        $peternakNotActive = Peternak::with('user')->wherehas('user', function($q) {
            $q->where('is_active', 0);
        })->count();
        $userActive = User::where('is_active', 1)->count();
        $userNotActive = User::where('is_active', 0)->count();

        if (!auth()->user()->hasRole('admin')) {
            $ternak = Ternak::where('user_id', auth()->id())->count();
            $artikel = Artikel::where('created_by', auth()->id())->count();
        }

        return view('dashboard.index', [
            'ternak' => $ternak,
            'artikel' => $artikel,
            'peternak' => $peternak,
            'user' => $user,
            'peternakActive' => $peternakActive,
            'peternakNotActive' => $peternakNotActive,
            'userActive' => $userActive,
            'userNotActive' => $userNotActive,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
