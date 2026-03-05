<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootswatch.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap-icons.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/custom.css") }}">
    @yield('styles')
  </head>
  <body class="bg-c-gray">
    <header>
      @include('inc/_topnav')
    </header>

    <main class="position-relative">
      @yield('content')
    </main>

    <footer></footer>
    <!-- Scripts -->
    <script src="{{ asset("assets/bootstrap/js/bootstrap.bundle.min.js") }}" charset="utf-8"></script>
    @yield('scripts')
  </body>
</html>
