<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Upload Produk')</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- CSS khusus upload produk -->
  <link rel="stylesheet" href="{{ asset('css/upload-produk.css') }}">
</head>
<body>
  @yield('content')

  <!-- JS khusus upload produk -->
  <script src="{{ asset('js/upload-produk.js') }}"></script>
</body>
</html>
