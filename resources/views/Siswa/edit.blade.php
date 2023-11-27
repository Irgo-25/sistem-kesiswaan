@extends('layouts.main')
@section('content')
    <div class=" -ml-0 -mt-5 mb-4">
        <h1 class="max-w-min text-3xl inline">Form Edit Siswa</h1>
    </div>
    <div class="max-w-4xl p-3 bg-slate-300 rounded-md shadow-md relative">
        <form action="{{route('Siswa.update', $item->NIS)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-5 gap-2">
                <div class="">
                    <label for="NIS" class="block">NIS</label>
                    <input type="text" id="NIS" name="NIS" placeholder="Masukan NIS"
                        class="block p-1.5 w-full rounded-md focus:outline-none focus:border-2 focus:border-[#18495f]"
                        value="{{old('NIS', $item->NIS)}}">
                </div>
                <div class="col-span-4">
                    <label for="name_siswa" class="block">Nama Siswa</label>
                    <input type="text" id="name_siswa" name="nama_siswa" placeholder="Masukan Nama Lengkap"
                        class="block p-1.5 w-full rounded-md focus:outline-none focus:border-2 focus:border-[#18495f]"
                        value="{{ old('nama_siswa', $item->nama_siswa) }}">
                </div>
                <div class="">
                    <label for="tempat_lahir" class="block">Tempat Lahir</label>
                    <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir"
                        class="block p-1.5 w-full rounded-md focus:outline-none focus:border-2 focus:border-[#18495f]"
                        value="{{ old('tempat_lahir', $item->tempat_lahir) }}">
                </div>
                <div class="">
                    <label for="tanggal_lahir" class="block">Tanggal Lahir</label>
                    <input datepicker datepicker-format="yyyy/mm/dd" type="text"
                        class="block p-1.5 w-full rounded-md focus:outline-none focus:border-2 focus:border-[#18495f]"
                        placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir', $item->tanggal_lahir) }}">
                </div>
                <div class="">
                    <label for="umur" class="block">Umur</label>
                    <input type="text" id="umur" name="umur" placeholder="Masukan Umur"
                        class="block p-1.5 w-full rounded-md focus:outline-none focus:border-2 focus:border-[#18495f]"
                        value="{{ old('umur', $item->umur) }}">
                </div>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
                    focus:ring-blue-300 font-medium rounded-lg text-md w-full mr-7 sm:w-auto px-5 py-2.5
                    text-center absolute right-24 top-56 ">Submit
            </button>
            <a class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 
                        focus:outline-none focus:ring-red-300 font-medium rounded-lg text-md w-full  sm:w-auto px-5 py-2.5 text-center  absolute right-6 top-56"
                href="{{route('Siswa.index')}}" type="button"> Batal
            </a>
        </form>
    </div>
@endsection
