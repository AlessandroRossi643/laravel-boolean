<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BOOLEAN_AR</title>
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
  </head>
  <body>
    @include ('partials._header')
      @yield('content')
    @include ('partials._footer')
    <script src="https://kit.fontawesome.com/122eaf82dd.js"></script>
  </body>
</html>
