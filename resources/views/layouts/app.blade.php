<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('style')

    <!-- Styles -->

</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid align-items-center">
      <h1 class="">QUEZT</h1>
      <div class="d-flex gap-2">
        <button type="button" class="btn btn-light">Masuk</button>
        <button type="button" class="btn btn-danger">Daftar</button>
      </div>
    </div>
  </nav>
</body>

</html>
