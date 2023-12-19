<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;


class LoginController extends Controller
{
    public function index()
    {
        return view('loginReg.index', [
            'title' => "Login"
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],

        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('Dashboard')->with('SuccessLogin', 'Selamat Datang Di Sistem Kesiswaan');
        } else {
            return back()->with([
                'ErrorLogin' => 'Login Gagal..',
            ]);
        }
    }
    public function Logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('Logout', 'Anda Berhasil Logout');

    }
}
