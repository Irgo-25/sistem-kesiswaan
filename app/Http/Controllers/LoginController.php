<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

        if (Auth::guard('Kesiswaan')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('Siswa');
        } elseif (Auth::guard('Siswa')->attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('Dashboard');
        } else {
            return back()->with([
                'ErrorLogin' => 'Login Gagal..',
            ]);
        }
    }
}