<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
    </head>
    <body>
        <div>
            <header>
                <h1>Laravel 101</h1>
                <nav>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="/contact-us">Contactez-nous</a></li>
                        <li><a href="/about-us">Savoir plus</a></li>
                        <li><a href="/articles">Articles</a></li>
                        <li><a href="/articles/create">Créer</a></li>
                        {{-- <li></li> --}}
                    </ul>
                </nav>
            </header>
            <main>
                <div>
                    @yield('content')
                    @yield('contents')
                    @yield('articles')
                    @yield('article')
                    @yield('createArticle')
                    @include('messages.success')
                </div>
            </main>
        </div>
    </body>
</html>
