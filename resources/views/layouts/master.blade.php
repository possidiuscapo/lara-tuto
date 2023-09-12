<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
    </head>
    <body>
        <div>
            <h1>Laravel 101</h1>
            <a href="/contact-us">Contactez-nous</a><br>
            <a href="/about-us">Savoir plus</a><br>
            <a href="/article/{{$article->id}}">Article</a><br>
            @yield('content')
            @yield('contents')
            @yield('article')
        </div>
    </body>
</html>
