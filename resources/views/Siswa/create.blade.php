@extends('layouts.main')
@section('content')
    <div class=" -ml-2 -mt-5 mb-4">
        <h1 class="max-w-min text-3xl inline">Form Tambah Siswa</h1>
    </div>
    <div class="max-w-4xl p-3 bg-slate-400 rounded-md shadow-md relative">
        <form action="{{ route('Siswa.store') }}" method="POST">
            <div class="grid grid-cols-5 gap-2">
                <div class="bg-red-600ss">
                    <label for="NIS" class="block">NIS1</label>
                    <input type="text" class="block p-1.5 w-full">
                </div>
                <div class="col-span-4">
                    <label for="NIS" class="block">NIS2</label>
                    <input type="text" class="block p-1.5 w-full">
                </div>
                <div class="">
                    <label for="NIS" class="block">NIS3</label>
                    <input type="text" class="block p-1.5 w-full">
                </div>
                <div class="">
                    <label for="NIS" class="block">NIS4</label>
                    <input type="text" class="block p-1.5 w-full">
                </div>
                <div class="">
                    <label for="NIS" class="block">NIS5 </label>
                    <input type="text" class="block p-1.5 w-full">
                </div>
            </div>



            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
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
