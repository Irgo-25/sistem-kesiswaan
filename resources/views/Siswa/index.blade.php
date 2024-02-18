@extends('layouts.main')

@section('content')
<div class="alert ">
    @if (session()->has('SuccessAdd'))
    <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div class="ms-3 text-sm font-medium">{{session('SuccessAdd')}}
        </div>
        <button type="button"
            class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
            data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
    @elseif (session()->has ('SuccessEdit'))
    <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div class="ms-3 text-sm font-medium">{{session('SuccessEdit')}}
        </div>
        <button type="button"
            class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
            data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
    @elseif (session()->has ('SuccessDelete'))
    <div id="alert-3" class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
        <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div class="ms-3 text-sm font-medium">{{session('SuccessDelete')}}
        </div>
        <button type="button"
            class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8"
            data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
        </button>
    </div>
    @endif
</div>
<div class="flex justify-between items-start">
    <h3 class="text-3xl font-Lexend font-[500]">Halaman Kesiswaan</h3>

    <a href="{{ route('Siswa.create') }}"
        class="p-3 mr-5 mt-8 -mb-1 font-Lexend bg-second text-white rounded-md">Tambah</a>
</div>


<div class="relative overflow-x-auto my-3 shadow-md rounded-md ">
    <table class="w-full table-auto text-base font-Lexend">
        <thead class=" bg-primary">
            <tr>
                <th class="py-2 font-[400] border-r-2 border-slate-600">NIS</th>
                <th class="py-2 font-[400] border-r-2 border-slate-600">NAMA SISWA</th>
                <th class="py-2 font-[400] border-r-2 border-slate-600">TEMPAT LAHIR</th>
                <th class="py-2 font-[400] border-r-2 border-slate-600">TANGGAL LAHIR</th>
                <th class="py-2 font-[400] border-r-2 border-slate-600">UMUR</th>
                <th class="py-2 font-[400] border-slate-600">

                </th>
            </tr>
        </thead>
        {{-- nanti akan di isikan perulangan  --}}
        <tbody class="text-left">
            @forelse ($data as $item)
            <tr class="hover:bg-slate-300 ">
                <td class="pl-2 py-3 font-[300] border-r-2 border-slate-600"> {{ $item->NIS }} </td>
                <td class="pl-2 py-3 font-[300] border-r-2 border-slate-600">{{ $item->nama_siswa }}</td>
                <td class="pl-2 py-3 font-[300] border-r-2 border-slate-600">{{ $item->tempat_lahir }}</td>
                <td class="pl-2 py-3 font-[300] border-r-2 border-slate-600">{{ $item->tanggal_lahir }}</td>
                <td class="pl-2 py-3 font-[300] border-r-2 border-slate-600">{{ $item->umur }}</td>
                <td class="flex justify-center mt-2 space-x-3">
                    <a href="{{route('Siswa.edit', $item->NIS)}}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="white" class="w-7 h-7 bg-yellow-500 rounded-md p-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>

                    </a>
                    <form action="{{ route('Siswa.destroy', $item->NIS)}}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button class="p-1 bg-red-600 rounded-md">
                            <i class="fa-solid fa-trash-can"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr class="hover:bg-slate-300 ">
                <td colspan="6">
                    <p class="text-center font-Lexend font-[400] text-lg">---Data Kosong---</p>
                </td>
            </tr>
            @endforelse
        </tbody>
        {{ $data->links() }}
    </table>
</div>
@endsection