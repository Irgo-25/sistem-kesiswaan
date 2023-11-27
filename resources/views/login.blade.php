<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <section class="bg-[url('/assets/sekolah.svg')] md:bg-no-repeat bg-center -z-10">
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
                        <p>Belum Punya Akun? <a href="{{ url('register') }}" class="text-blue-600">Register</a></p>
                    </div>
                </form>
            </div>
            <img src="{{ 'assets/logo-smk.png' }}" alt="" class="max-w-[3rem] -ml-6  md:max-w-[10rem]">
        </div>
    </section>
</body>

</html>
