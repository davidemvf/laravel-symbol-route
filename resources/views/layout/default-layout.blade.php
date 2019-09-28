<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('elem.head')
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
