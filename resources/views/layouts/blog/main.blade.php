<!doctype html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{url('resources/css').'/style.css'}}" type="text/css" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  </head>
  <body>
  <div class="container">
    {{--header--}}
    @include('layouts.blog.header')
    {{--body--}}
    @include('layouts.blog.body')
    {{--footer--}}
    @include('layouts.blog.footer')
  </div>
  </body>
</html>