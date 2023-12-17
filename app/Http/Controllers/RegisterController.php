<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('loginReg.register', [
            'title' => 'Registrasi'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $RequestValidate = $request->validate([
            'name' => ['required', 'max:255', 'min:4', 'unique:users'],
            'email' => ['required', 'min:3', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:5']
        ]);
        $RequestValidate['password'] = Hash::make('password');
        User::create($RequestValidate);
        return redirect('/login')->with('success', 'User Berhasil Dibuat, Silahkan Login');
    }


}
