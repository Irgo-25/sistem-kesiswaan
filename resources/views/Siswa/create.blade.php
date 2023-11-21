@extends('layouts.main')
@section('content')
<div class=" -ml-2 -mt-5 mb-4">
    <h1 class="max-w-min text-3xl inline">Form Tambah Siswa</h1>
</div>
<form action="{{ route('Siswa.store') }}" method="POST">
    <div class="mb-4 mr-3">
        <label for="kode-barang" class="block mb-2 text-md font-medium text-gray-900">NIS</label>
        <input type="text" id="kode-barang" name="kode_barang"
            class="bg-gray-200 border-2 border-primary active:border- text-md rounded-lg  block w-full p-2.5 "
            required value="">
    </div>
    <div class="mb-4 mr-3">
        <label for="kode-barang" class="block mb-2 text-md font-medium text-gray-900">Nama Siswa</label>
        <input type="text" id="kode-barang" name="kode_barang"
            class="bg-gray-200 border-2 border-primary active:border- text-md rounded-lg  block w-full p-2.5 "
            required value="">
    </div>
    <div class="mb-4 mr-3">
        <label for="kode-barang" class="block mb-2 text-md font-medium text-gray-900">Tempat Lahir</label>
        <input type="text" id="kode-barang" name="kode_barang"
            class="bg-gray-200 border-2 border-primary active:border- text-md rounded-lg  block w-full p-2.5 "
            required value="">
    </div>
    <div class="mb-4 mr-3">
        <label for="kode-barang" class="block mb-2 text-md font-medium text-gray-900">Tanggal Lahir</label>
        <input type="text" id="kode-barang" name="kode_barang"
            class="bg-gray-200 border-2 border-primary active:border- text-md rounded-lg  block w-full p-2.5 "
            required value="">
    </div>
    <div class="mb-4 mr-3">
        <label for="kode-barang" class="block mb-2 text-md font-medium text-gray-900">Umur</label>
        <input type="text" id="kode-barang" name="kode_barang"
            class="bg-gray-200 border-2 border-primary active:border- text-md rounded-lg  block w-full p-2.5 "
            required value="">
    </div>


    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
        focus:ring-blue-300 font-medium rounded-lg text-md w-full mr-3 sm:w-auto px-5 py-2.5
         text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit
    </button>
    <a class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 
    focus:outline-none focus:ring-red-300 font-medium rounded-lg text-md w-full  sm:w-auto px-5 py-2.5 text-center"
        href="{{ url('Siswa') }}" type="button"> Batal
    </a>
</form>
@endsection