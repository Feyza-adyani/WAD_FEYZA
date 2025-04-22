<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input email dan password
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        // Cek apakah kredensial valid
        if (Auth::attempt($credentials)) {
            // Jika berhasil login, redirect ke halaman daftar buku
            return redirect()->route('books.index');
        } else {
            // Jika gagal login, kembali ke halaman login dengan pesan error
            return redirect()->route('login')->with('error', 'Email atau password salah. Silakan coba lagi.');
        }
    }

    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout(); // Logout pengguna

        $request->session()->invalidate(); // Menghapus session

        $request->session()->regenerateToken(); // Menghasilkan token baru untuk sesi

        return redirect()->route('login'); // Arahkan ke halaman login
    }
}
