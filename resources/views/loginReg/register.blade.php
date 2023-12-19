<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{$title}} </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
    <section class="bg-[url('/assets/sekolah.jpg')] md:bg-no-repeat bg-center -z-10">
        @if ($errors->any())
        <div class="p-3 bg-red-600 mb-6 max-w-4xl rounded-md">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="flex flex-col items-center justify-center px-6 py-8 h-screen">
            <div class="bg-[rgba(255,187,92,0.5)] rounded-lg -ml-6 md:rounded-lg md:pb-5 pt-5 pr-6 pl-4">
                <form class="space-y-5" action="{{ route('Registrasi') }}" method="POST">
                    @csrf
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-red-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full p-1 pr-3 sm:p-2.5 md:pr-28"
                            placeholder="Masukan Username" required value="{{old('name')}}">
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-red-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full p-1 pr-3 sm:p-2.5 md:pr-28"
                            placeholder="Masukan Email" required value="{{old('email')}}">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password"
                            class="bg-gray-50 border border-red-600 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 w-full p-1 pr-3 sm:p-2.5 md:pr-28"
                            placeholder="Masukan password" required>
                    </div>
                    <div>
                        <button type="submit" class="mb-2 p-1.5 bg-red-600 rounded-md md:p-2.5">
                            Register
                        </button>
                    </div>
                </form>
            </div>
            <img src="{{ 'assets/logo-kemendikbud.png' }}" alt="background"
                class="max-w-[4rem] -ml-2 md:max-w-[10rem] md:-ml-4 mt-4">
        </div>
    </section>
</body>

</html>