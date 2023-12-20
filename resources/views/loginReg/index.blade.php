<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{ asset('/js/app.js') }}"></script>
</head>

<body>
    <section class="staic bg-[url('/assets/sekolah.jpg')] md:bg-no-repeat bg-center -z-10">
        @if (session()->has('success'))
        <div id="alert-3"
            class="absolute flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 top-[4%] right-[42%]"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div>
                <span class="font-medium">{{ session('success') }}</span>
            </div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
        @elseif (session()->has('ErrorLogin'))
        <div class="absolute flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-green-50 top-[4%] right-[42%]"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div>
                <span class="font-medium">{{ session('ErrorLogin') }}</span>
            </div>
        </div>
        @elseif($errors->any())
        <div class="absolute p-3 bg-red-600 mb-6 max-w-4xl rounded-md top-[4%] right-[42%]">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @elseif(session()->has('Logout'))
        <div id="alert-3"
            class="absolute flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 top-[4%] right-[42%]"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <div>
                <span class="font-medium">{{ session('Logout') }}</span>
            </div>
        </div>
        @endif


        <div class="flex flex-col justify-center items-center px-6 py-8 h-screen">
            <div
                class="top-[16%] right-[38%] bg-[rgba(255,187,92,0.5)] rounded-lg pt-5 pb-5 pr-6 pl-4 -ml-6 md:rounded-lg md:pb-5 md:pt-5 md:pr-6 md:pl-4">
                <form class="space-y-5" action="{{ route('login.authenticate') }}" method="post">
                    @csrf
                    @method('POST')
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                        <input type="text" name="name" id="name" 
                            class="bg-gray-50 border border-red-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full p-1 pr-3 sm:p-2.5 md:pr-28"
                            placeholder="Masukan Username" required value="{{old('name')}}">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password"
                            class="bg-gray-50 border border-red-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full p-1 pr-3 sm:p-2.5 md:pr-28"
                            placeholder="Masukan password" required>
                    </div>
                    <div>
                        <button type="submit" class="mb-2 p-1.5 bg-red-600 rounded-md md:p-2.5">
                            Login
                        </button>
                    </div>
                </form>
                <p>Belum Punya Akun? <a href="{{ route('Registrasi') }}" class="text-blue-600">Register</a>
                </p>
            </div>
            <img src="{{ 'assets/logo-kemendikbud.png' }}" alt="background"
                class="max-w-[4rem] -ml-6 mt-4 md:max-w-[10rem]">
        </div>
    </section>
</body>

</html>