<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{

    // untuk memanggil dan menampilkan halaman index di folder Siswa
    public function index()
    {
        $query = DB::table('Siswa');   
        $data = $query->latest()->paginate(3);
        return view('Siswa.index', [

            'title' => 'Kesiswaan',
            // membuat variabel yang mengambil dari database
            'data' => $data
        ]);
    }
    // fungsi untuk menampilkan form yang berada dalam folder view
    public function create()
    {
        return view('Siswa.create', [
            'title' => 'Tambah Siswa'
        ]);
    }

    // Fungsi untuk menyimpan data setelah user input di form
    public function store(Request $request)
    {
        // membuat validasi untuk aturan penulisan di store
        $request->validate([
            'NIS' => 'required|max:20|unique:siswa',
            'nama_siswa' => ['required', 'string'],
            'tempat_lahir' => ['required', 'string'],
            'tanggal_lahir' => ['required', 'date'],
            'umur' => ['required', 'integer'],
        ]);
        // untuk memanggil validasi dan membuat data ke database
        $data = $request->all();
        Siswa::create($data);
        // mengembalikan ke tampilan view jika berhasil
        return redirect()->route('Siswa.index')->with('SuccessAdd', 'Berhasil ditambahkan');
    }
    //fungsi untuk menampilkan form edit di folder view file Siswa.edit
    public function edit($NIS)
    {
        return view('Siswa.edit', [
            'title' => "Edit Siswa",
            'item' => Siswa::find($NIS)
        ]);
    }

    public function update(Request $request, $NIS)
    {
        // membuat validasi untuk aturan penulisan di store
        $request->validate([
            'nama_siswa' => ['required', 'string'],
            'tempat_lahir' => ['required', 'string'],
            'tanggal_lahir' => ['required', 'date'],
            'umur' => ['required', 'integer'],
        ]);
    // untuk memanggil validasi dan update data ke database sesuai NIS 
        $data = $request->all();
        $siswa = Siswa::find($NIS);
        $siswa->update($data);
        return redirect()->route('Siswa.index');
    }
    // Fungsi untuk delete siswa
    public function destroy($NIS)
    {

        $Siswa = Siswa::find($NIS);
        $Siswa->delete();
        return redirect()->route('Siswa.index');
    }
}
