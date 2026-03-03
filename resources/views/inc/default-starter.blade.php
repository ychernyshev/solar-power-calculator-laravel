<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Solar Power Calculator: {{ $title }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .w-100 {
          width: 100%
        }

        .full-height {
            height: 100vh;
        }

        .weight-500 {
          font-weight: 500;
        }

        .weight-600 {
          font-weight: 600;
        }

        .text-upper {
          text-transform: uppercase;
        }

        .text-light {
          color: #636b6f;
        }

        .text-left {
          text-align: left;
        }
        }

        .text-right {
          text-align: right;
        }

        .text-justify {
          text-align: justify;
        }

        .display-flex {
          display: flex;
        }

        .flex-column {
          flex-direction: column;
        }

        .justify-content-center {
          justify-content: center;
        }

        .align-items-center {
            align-items: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            letter-spacing: .1rem;
            text-decoration: none;
        }

        .underline-none {
          text-decoration: none;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
  </head>
  <body>
    <div class="content">
      <div class="display-flex justify-content-center">
        <div style="width: 100vh" class="display-flex flex-column justify-content-center align-items-center position-ref full-height">
          @yield('section')
        </div>
      </div>
    </dir>
  </body>
</html>
