@extends('layouts.main')

@section('content')
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
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="white" class="w-7 h-7 bg-yellow-500 rounded-md p-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                          </svg>
                          
                    </a>
                    <form action="{{ route('Siswa.destroy', $item->NIS)}}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="white"
                                class="w-7 h-7 bg-red-600 rounded-md p-1" onclick="return confirm('Are you sure?')">
                                <path fill-rule="evenodd"
                                    d="M8.75 1A2.75 2.75 0 006 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 10.23 1.482l.149-.022.841 10.518A2.75 2.75 0 007.596 19h4.807a2.75 2.75 0 002.742-2.53l.841-10.52.149.023a.75.75 0 00.23-1.482A41.03 41.03 0 0014 4.193V3.75A2.75 2.75 0 0011.25 1h-2.5zM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4zM8.58 7.72a.75.75 0 00-1.5.06l.3 7.5a.75.75 0 101.5-.06l-.3-7.5zm4.34.06a.75.75 0 10-1.5-.06l-.3 7.5a.75.75 0 101.5.06l.3-7.5z"
                                    clip-rule="evenodd" />
                            </svg>
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