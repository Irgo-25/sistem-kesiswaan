<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} </title>
    {{-- css main --}}
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    {{-- Font awesome --}}
    <link rel="stylesheet" href=" {{mix ('css/style.css')}}">
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
</head>

<body>
    <nav class="bg-primary w-full p-3 top-0 fixed shadow-md z-40">
        @include('partials.header')
    </nav>

    <aside class="h-screen w-52 fixed top-0 left-0 z-30 ">
        @include('partials.sidebar')
    </aside>

    <div class="ml-56 mt-24 mr-4">
        @if ($errors->any())
            <div class="p-3 bg-red-600 mb-6 max-w-4xl rounded-md">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @yield('content')
    </div>
</body>

</html>
