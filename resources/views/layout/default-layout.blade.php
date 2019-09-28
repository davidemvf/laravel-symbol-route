<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$type}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
      <header class='{{$color}}'>
        <h1>{{$type}}</h1>
      </header>
      <div class="container">
        @yield('content')
      </div>
      <footer class='{{$color}}'>
        <h2>{{$type}}</h2>
      </footer>

    </body>
</html>
