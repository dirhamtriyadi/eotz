<?php

namespace App\Http\Controllers;

use App\Models\Ternak;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class TernakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ternaks = Ternak::latest()->get();

        if (!auth()->user()->hasRole('admin')) {
            $ternaks = $ternaks->where('user_id', auth()->id());
        }

        return view('ternak.index', [
            'ternaks' => $ternaks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ternak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'seri_burung' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_netas' => 'required',
            'indukan_jantan' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'seri_indukan_jantan' => 'required',
            'indukan_betina' => 'required|file|mimes:jpg,jpeg,png|max:2048',
            'seri_indukan_betina' => 'required',
        ]);

        $validatedData['user_id'] = auth()->id();

        $latestTernak = Ternak::latest()->first();
        $latestIncrement = $latestTernak ? $latestTernak->id + 1 : 1;
        $validatedData['nomor_ring'] = $validatedData['seri_burung'] . str_pad($latestIncrement, 4, '0', STR_PAD_LEFT);

        $ternak = new Ternak();
        $ternak->nomor_ring = $validatedData['nomor_ring'];
        $ternak->seri_burung = $validatedData['seri_burung'];
        $ternak->jenis_kelamin = $validatedData['jenis_kelamin'];
        $ternak->tanggal_netas = $validatedData['tanggal_netas'];

        $ternak->seri_indukan_jantan = $validatedData['seri_indukan_jantan'];
        $ternak->seri_indukan_betina = $validatedData['seri_indukan_betina'];

        $ternak->user_id = $validatedData['user_id'];

        if ($request->hasFile('indukan_jantan')) {
            $file = $request->file('indukan_jantan');
            $filename = date('Y-m-d') . '-' . $ternak->seri_burung . '-' . $file->getClientOriginalName();
            $destinationPath = public_path('/images/ternak/indukan_jantan');
            $file->move($destinationPath, $filename);
            // $file->storeAs('public/ternak/indukan_jantan', $filename);
            $ternak->indukan_jantan = $filename;
        }

        if ($request->hasFile('indukan_betina')) {
            $file = $request->file('indukan_betina');
            $filename = date('Y-m-d') . '-' . $ternak->seri_burung . '-' . $file->getClientOriginalName();
            $destinationPath = public_path('/images/ternak/indukan_betina');
            $file->move($destinationPath, $filename);
            // $file->storeAs('public/ternak/indukan_betina', $filename);
            $ternak->indukan_betina = $filename;
        }

        $ternak->save();

        return redirect()->route('ternak.index')->with('success', 'Data berhasil disimpan');
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
        $ternak = Ternak::findOrFail($id);

        if (!auth()->user()->hasRole('admin') && $ternak->user_id != auth()->id()) {
            return redirect()->route('ternak.index')->with('error', 'Anda tidak memiliki akses ke halaman tersebut');
        }

        return view('ternak.edit', [
            'ternak' => $ternak
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'seri_burung' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_netas' => 'required',
            'indukan_jantan' => '',
            'seri_indukan_jantan' => 'required',
            'indukan_betina' => '',
            'seri_indukan_betina' => 'required',
        ]);

        $validatedData['user_id'] = auth()->id();

        $ternak = Ternak::findOrFail($id);

        if (!auth()->user()->hasRole('admin') && $ternak->user_id != auth()->id()) {
            return redirect()->route('ternak.index')->with('error', 'Anda tidak memiliki akses ke halaman tersebut');
        }

        $ternak->seri_burung = $validatedData['seri_burung'];
        $ternak->jenis_kelamin = $validatedData['jenis_kelamin'];
        $ternak->tanggal_netas = $validatedData['tanggal_netas'];

        $ternak->seri_indukan_jantan = $validatedData['seri_indukan_jantan'];
        $ternak->seri_indukan_betina = $validatedData['seri_indukan_betina'];

        if ($request->hasFile('indukan_jantan')) {
            $file = $request->file('indukan_jantan');
            $filename = date('Y-m-d') . '-' . $ternak->seri_burung . '-' . $file->getClientOriginalName();
            $destinationPath = public_path('/images/ternak/indukan_jantan');
            $file->move($destinationPath, $filename);
            // $file->storeAs('public/ternak/indukan_jantan', $filename);
            $ternak->indukan_jantan = $filename;
        }

        if ($request->hasFile('indukan_betina')) {
            $file = $request->file('indukan_betina');
            $filename = date('Y-m-d') . '-' . $ternak->seri_burung . '-' . $file->getClientOriginalName();
            $destinationPath = public_path('/images/ternak/indukan_betina');
            $file->move($destinationPath, $filename);
            // $file->storeAs('public/ternak/indukan_betina', $filename);
            $ternak->indukan_betina = $filename;
        }

        $ternak->save();

        return redirect()->route('ternak.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ternak = Ternak::findOrFail($id);

        if (!auth()->user()->hasRole('admin') && $ternak->user_id != auth()->id()) {
            return redirect()->route('ternak.index')->with('error', 'Anda tidak memiliki akses ke halaman tersebut');
        }

        $ternak->delete();

        $indukan_jantan = $ternak->indukan_jantan;
        if ($indukan_jantan) {
            $path = public_path('images/ternak/indukan_jantan/' . $indukan_jantan);
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $indukan_betina = $ternak->indukan_betina;
        if ($indukan_betina) {
            $path = public_path('images/ternak/indukan_betina/' . $indukan_betina);
            if (file_exists($path)) {
                unlink($path);
            }
        }

        return redirect()->route('ternak.index')->with('success', 'Data berhasil dihapus');
    }

    /**
     * Print the specified resource from storage.
     */
    public function print($id)
    {
        $ternak = Ternak::findOrFail($id);

        // return view('ternak.print', [
        //     'ternak' => $ternak
        // ]);

        $pdf = Pdf::setPaper('a4', 'landscape')->loadView('ternak.print', [
            'ternak' => $ternak
        ]);

        return $pdf->stream();

        // dd($ternak);
        // return view('ternak.print', [
        //     'ternak' => $ternak
        // ]);
    }
}
