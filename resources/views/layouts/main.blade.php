<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;400&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="bg-red-900 w-full p-3 top-0 fixed shadow-md z-40">
        @include('partials.header')
    </nav>

    <aside class="h-screen w-52 fixed top-0 left-0 z-30 ">
        @include('partials.sidebar')
    </aside>

    <div class="ml-56
        mt-24">
        @yield('content')
    </div>
</body>

</html>
