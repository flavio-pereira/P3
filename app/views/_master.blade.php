<!DOCTYPE html>
<html>
  <head>

    <title>@yield('title',"P3 - Flavio Pereira")</title>
    <meta charset='utf-8'>
    
    <link rel="icon" type="image/icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    @yield('head')

  </head>
  <body>

    @include('navigation')
    
    @yield('content')

    @yield('body')
    
  </body>
  
</html>
