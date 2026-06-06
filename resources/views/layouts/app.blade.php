<!doctype html>
<html lang="ru" class="w-screen h-screen">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('resources/images/logo/logo-small.png') }}">
    <title>@yield('title', 'Мегапласт')</title>

    @vite([
        'resources/css/app.css',

        'resources/js/header.js'
    ])
</head>
<body class="w-screen min-h-screen overflow-x-hidden relative bg-white flex flex-col  scroll-smooth">

@include('inc.header')

@yield('main')

@include('inc.footer')

@yield('modal')

@yield('script')
</body>
</html>
