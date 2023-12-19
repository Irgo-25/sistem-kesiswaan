<div class="flex flex-row justify-between items-center">
    <a href="{{url('Siswa')}}">
        <img src="{{ '/assets/logo-kemendikbud.png' }}" alt="logo" class="w-12 h-10">
    </a>
        <img src="{{ 'assets/logo-smk.png' }}" alt="background"
        class="max-w-[4rem] -ml-5 mt-2 md:max-w-[4rem]">
<form action="{{route('Logout')}}" method="POST">
    @csrf
    <div>
        <button  class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
              </svg>
            <h4 class="py-1">logout</h4>
        </button>
    </div>
</form>
</div>

