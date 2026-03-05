<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Solar Power Calculator: {{ $title }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootswatch.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap-icons.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/custom.css") }}">

  </head>
  <body>
    <div class="content">
      <div class="display-flex justify-content-center">
        <div style="width: 100vh" class="display-flex flex-column justify-content-center align-items-center position-ref full-height">
          @yield('section')
        </div>
      </div>
    </div>

    <script src="{{ asset("assets/bootstrap/js/bootstrap.bundle.min.js") }}" charset="utf-8"></script>
  </body>
</html>
