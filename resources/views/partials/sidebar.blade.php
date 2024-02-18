<div class="px-3 py-3 overflow-y-auto bg-second h-full pt-24 shadow-md">
    <ul class="space-y-2 font-medium">
        <li>
            <a href="{{ url('Dashboard') }}" class="flex items-center hover:bg-[#fb8500] p-2 rounded text-white">
                <i class="fa-solid fa-home"></i>
                <span class="mt-1 ml-2">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ url('Siswa') }}" class="flex items-center hover:bg-[#fb8500] p-2 rounded text-white">
                <i class="fa-solid fa-list-check"></i>
                <span class="mt-1 ml-2">Kesiswaan</span>
            </a>
        </li>
        <li>
            <a href="{{url('Keuangan')}}" class="flex items-center hover:bg-[#fb8500] p-2 rounded  text-white">
                <i class="fa-solid fa-user"></i>
                <span class="mt-1 ml-2">Keuangan</span>
            </a>
        </li>
    </ul>
</div>