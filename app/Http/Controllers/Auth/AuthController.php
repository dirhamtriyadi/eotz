<?php

namespace App\Http\Controllers\Auth;

use App\Models\Peternak;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function register()
    {
        return view('auth.register');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,except,id',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'no_hp' => 'required|unique:peternak,no_hp,except,id|numeric',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = User::create($validatedData);
        $user->assignRole('peternak');

        $peternak = new Peternak();
        $peternak->no_hp = $validatedData['no_hp'];
        $peternak->user_id = $user->id;
        $peternak->save();

        return redirect()->route('register')->with('success', 'Peternak created successfully.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
