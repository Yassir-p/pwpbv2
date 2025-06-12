<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('pages/LoginView');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin')
                ->with('swal_success', 'Selamat datang, Admin!');
        }

        if (Auth::guard('pengguna')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/')
                ->with('swal_success', 'Selamat datang, ' . Auth::guard('pengguna')->user()->full_name . '!');
        }

        // Jika keduanya gagal
        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ])->withInput()->with('swal_error', 'Username atau password salah.');
    }


    public function logout(Request $request)
{
    if (Auth::guard('admin')->check()) {
        Auth::guard('admin')->logout();
    } elseif (Auth::guard('pengguna')->check()) {
        Auth::guard('pengguna')->logout();
    }

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
}

    public function registerForm()
    {
        return view('pages/RegisterView');
    }

    public function register(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|unique:pengguna,email',
            'username' => 'required|string|unique:pengguna,username|max:255',
            'password' => 'required|string|max:40',
        ]);

        $user = Pengguna::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        Auth::guard('pengguna')->login($user);
        return redirect('/');
    }
}
