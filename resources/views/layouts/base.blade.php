<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ mix('css/app.css' )}}">
  </head>
  <body>
    <header>
      <h1><a href="{{ route('category.index') }}">BLOG</a></h1>
    </header>
      @yield('content')
    <footer>
      <h6>Footer</h6>
    </footer>

  </body>
</html>
