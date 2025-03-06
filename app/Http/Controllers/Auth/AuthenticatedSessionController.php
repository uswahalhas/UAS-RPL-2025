<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        // Autentikasi pengguna
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Regenerasi session untuk mencegah session fixation
            $request->session()->regenerate();

            // Redirect ke halaman booking setelah login
            return redirect()->intended('/booking');
        }

        // Jika autentikasi gagal, redirect kembali ke login
        return Redirect::back()->withErrors(['email' => 'Invalid credentials']);
    }
}
