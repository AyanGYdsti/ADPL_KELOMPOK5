<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reuse & Share - @yield('title')</title>

    @if (Request::is('home'))
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @endif
    @if (Request::is('pesananku'))
        <link rel="stylesheet" href="{{ asset('css/pesananku.css') }}">
    @endif
    @if (Request::is('pesan'))
        <link rel="stylesheet" href="{{ asset('css/pesan.css') }}">
    @endif
    @if (Request::is('upload-produk'))
        <link rel="stylesheet" href="{{ asset('css/upload-produk.css') }}">
    @endif

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">


    @stack('styles')
</head>

<body>
    @yield('content')

    @if (Request::is('home'))
        <script src="{{ asset('js/home.js') }}"></script>
    @endif
    @if (Request::is('pesananku'))
        <script src="{{ asset('js/pesananku.js') }}"></script>
    @endif
    @if (Request::is('pesan'))
        <script src="{{ asset('js/pesan.js') }}"></script>
    @endif
    @if (Request::is('upload-produk'))
        <script src="{{ asset('js/upload-produk.js') }}"></script>
    @endif
    @stack('scripts')
</body>

</html>
