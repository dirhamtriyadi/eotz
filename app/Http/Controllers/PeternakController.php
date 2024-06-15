<?php

namespace App\Http\Controllers;

use App\Models\Peternak;
use App\Models\User;
use Illuminate\Http\Request;

class PeternakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peternaks = User::role('peternak')->latest()->get();

        return view('peternak.index', [
            'peternaks' => $peternaks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peternak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,except,id',
            'password' => 'required',
            'no_hp' => 'required|unique:peternak,no_hp,except,id|numeric',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = User::create($validatedData);
        $user->assignRole('peternak');

        $peternak = new Peternak();
        $peternak->no_hp = $validatedData['no_hp'];
        $peternak->user_id = $user->id;
        $peternak->save();

        return redirect()->route('peternak.index')->with('success', 'Peternak created successfully.');
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
        $peternak = User::findOrFail($id);

        return view('peternak.edit', [
            'peternak' => $peternak
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $id . ',id',
            'no_hp' => 'required|unique:peternak,no_hp,' . $id . ',user_id|numeric',
        ]);

        if ($request->password) {
            $validatedData['password'] = bcrypt($request->password);
        }

        $user = User::findOrFail($id);
        $user->update($validatedData);

        $peternak = Peternak::where('user_id', $id)->first();
        $peternak->no_hp = $validatedData['no_hp'];
        $peternak->save();

        return redirect()->route('peternak.index')->with('success', 'Peternak updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('peternak.index')->with('success', 'Peternak deleted successfully.');
    }

    public function update_status($id)
    {
        $user = User::findOrFail($id);
        $user->is_active = !$user->is_active;
        $user->save();

        return redirect()->route('peternak.index')->with('success', 'User status updated successfully.');
    }
}
