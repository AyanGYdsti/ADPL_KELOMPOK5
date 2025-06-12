<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reuse & Share - @yield('title', 'Pesanan')</title>
    <link rel="stylesheet" href="{{ asset('css/pesananku.css') }}">
    @stack('styles')
</head>
<body>
    @yield('content')

    <script src="{{ asset('js/pesananku.js') }}"></script>
    @stack('scripts')
</body>
</html>
