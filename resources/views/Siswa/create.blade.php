@extends('layouts.main')
@section('content')
<div class=" -ml-2 -mt-5 mb-4">
    <h1 class="max-w-min text-3xl inline">Form Tambah Siswa</h1>
</div>
<div class="max-w-4xl p-3 bg-slate-400 rounded-md shadow-md relative">
    <form action="{{ route('Siswa.store') }}" method="POST">
        <div class="grid grid-cols-5 gap-2">
            <div class="bg-red-600ss">
                <label for="NIS" class="block">NIS</label>
                <input type="text" id="NIS" name="NIS" placeholder="Masukan NIS" class="block p-1.5 w-full">
            </div>
            <div class="col-span-4">
                <label for="name_siswa" class="block">Nama Siswa</label>
                <input type="text" id="name_siswa" name="nama_siswa" placeholder="Masukan Nama Lengkap"
                    class="block p-1.5 w-full">
            </div>
            <div class="">
                <label for="tempat_lahir" class="block">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
                    class="block p-1.5 w-full">
            </div>
            <div class="">
                <label for="tanggal_lahir" class="block">Tanggal Lahir</label>
                <input datepicker datepicker-autohide type="text" id="tanggal_lahir" name="tanggal_lahir"
                    placeholder="Tanggal Lahir" format class="block p-1.5 w-full">
            </div>
            <div class="">
                <label for="umur" class="block">Umur</label>
                <input type="text" id="umur" name="umur" placeholder="Masukan Umur" class="block p-1.5 w-full">
            </div>
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
        focus:ring-blue-300 font-medium rounded-lg text-md w-full mr-3 sm:w-auto px-5 py-2.5
         text-center absolute right-24 top-56">Submit
        </button>
        <a class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 
    focus:outline-none focus:ring-red-300 font-medium rounded-lg text-md w-full  sm:w-auto px-5 py-2.5 text-center  absolute right-6 top-56"
            href="{{ url('Siswa') }}" type="button"> Batal
        </a>
    </form>
</div>
@endsection