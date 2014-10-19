<!DOCTYPE html>
<html>
  <head>

    <title>@yield('title',"P3 - Flavio Pereira")</title>
    <meta charset='utf-8'>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    @yield('head')

  </head>
  <body>

    @include('navigation')

    <br />
    <br />
    
    @yield('content')

    @yield('body')
    
  </body>
  
</html>
