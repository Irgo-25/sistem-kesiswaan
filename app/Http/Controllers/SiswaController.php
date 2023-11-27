<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::latest()->get();
        return view('Siswa.index', [

            'title' => 'Dashboard',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Siswa.create', [
            'title' => 'Tambah Siswa'
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
        $request->validate([
            'NIS' => 'required|max:20|unique:siswa',
            'nama_siswa' => ['required', 'string'],
            'tempat_lahir' => ['required', 'string'],
            'tanggal_lahir' => ['required', 'date'],
            'umur' => ['required', 'interger'],
        ]);
        $data = $request->all();
        Siswa::create($data);
        return redirect()->route('Siswa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($NIS)
    {
        return view('Siswa.edit', [
            'title' => "Edit Siswa",
            'item' => Siswa::find($NIS)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $NIS)
    {
        $request->validate([
            'nama_siswa' => ['required', 'string'],
            'tempat_lahir' => ['required', 'string'],
            'tanggal_lahir' => ['required', 'date'],
            'umur' => ['required', 'integer'],
        ]);

        $data = $request->all();
        $siswa = Siswa::find($NIS);
        $siswa->update($data);
        return redirect()->route('Siswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($NIS)
    {

        $Siswa = Siswa::find($NIS);
        $Siswa->delete();
        return redirect()->route('Siswa.index');
    }
}
