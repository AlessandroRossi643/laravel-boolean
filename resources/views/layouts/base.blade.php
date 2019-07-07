<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BOOLEAN_AR</title>
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
  </head>
  <body>
    @include ('partials._header')
    <div id="main_content">
      @yield('content')
    </div>
    @include ('partials._footer')
    <script src="https://kit.fontawesome.com/122eaf82dd.js"></script>
  </body>
</html>
