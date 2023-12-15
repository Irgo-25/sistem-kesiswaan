<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="/css/app.css">

</head>

<body>
    <section class="relative bg-[url('/assets/sekolah.svg')] md:bg-no-repeat bg-center -z-10">
        <div class="absolute flex items-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 top-[20%] right-[39%]"
            role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div>
                <span class="font-medium">User berhasil Ditambahkan,</span> Silahkan login
            </div>
        </div>
        <div class="flex items-center justify-between px-6 py-8 h-screen">

            <img src="{{ 'assets/logo-kemendikbud.png' }}" alt="background"
                class="max-w-[4rem] -ml-6 mt-4 md:max-w-[10rem]">
            <div
                class="bg-[rgba(255,187,92,0.5)] rounded-lg pt-5 pb-5 pr-6 pl-4 -ml-6 md:rounded-lg md:pb-5 md:pt-5 md:pr-6 md:pl-4">
                <form class="space-y-5" action="">
                    @csrf
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                        <input type="username" name="username" id="username"
                            class="bg-gray-50 border border-red-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full p-1 pr-3 sm:p-2.5 md:pr-28"
                            placeholder="Masukan Username" required
                            oninvalid="this.setCustomValidity('Please input your username')">
                    </div>
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password"
                            class="bg-gray-50 border border-red-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full p-1 pr-3 sm:p-2.5 md:pr-28"
                            placeholder="Masukan password" required
                            oninvalid="this.setCustomValidity('Please input your password')">
                    </div>
                    <div>
                        <button type="submit" class="mb-2 p-1.5 bg-red-600 rounded-md md:p-2.5">
                            Login
                        </button>
                        <p>Belum Punya Akun? <a href="{{ route('Registrasi.index') }}"
                                class="text-blue-600">Register</a>
                        </p>
                    </div>
                </form>
            </div>
            <img src="{{ 'assets/logo-smk.png' }}" alt="" class="max-w-[3rem] -ml-6  md:max-w-[10rem]">
        </div>
    </section>
    <script src="{{ asset('backend/flowbite/dist/flowbite.js') }}"></script>
</body>

</html>
