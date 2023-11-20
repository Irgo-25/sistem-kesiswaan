<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <section class="bg-[url('/assets/sekolah.svg')] md:bg-no-repeat bg-center -z-10">
        <div class="flex items-center justify-between px-6 py-8 h-screen">

            <img src="{{ 'assets/logo-kemendikbud.png' }}" alt="background"
                class="max-w-[4rem] -ml-2 mt-4 md:max-w-[10rem] md:-ml-4 mt-4">

            <div class="bg-[rgba(255,187,92,0.5)] rounded-lg -ml-6 md:rounded-lg md:pb-5 pt-5 pr-6 pl-4">
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
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Konfirmasi
                            Password</label>
                        <input type="password" name="password" id="password"
                            class="bg-gray-50 border border-red-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full p-1 pr-3 sm:p-2.5 md:pr-28"
                            placeholder="Masukan password" required
                            oninvalid="this.setCustomValidity('Please input your password')">
                    </div>
                    <div>
                        <button type="submit" class="mb-2 p-1.5 bg-red-600 rounded-md md:p-2.5">
                            Register
                        </button>
                    </div>
                </form>
            </div>
            <img src="{{ 'assets/logo-smk.png' }}" alt="" class="max-w-[2rem] -ml-6  md:max-w-[10rem]">
        </div>
    </section>
</body>

</html>
