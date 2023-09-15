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
                    <li><a href="/home">Home</a></li>
                    <li><a href="/contact-us">Contactez-nous</a></li>
                    <li><a href="/about-us">Savoir plus</a></li>
                    <li><a href="/articles">Articles</a></li>
                    <li><a href="/articles/create">Créer</a></li>
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endguest
                </ul>
                @auth
                    <a href="{{ route('profile') }}">Votre profil</a>
                    <form action="{{ route('logout') }}" method="POST">
                        <input type="submit" value="Se déconnecter">
                    </form>
                @endauth
            </nav>
        </header>
        <main>
            <div>
                @yield('content')
                @yield('contents')
                @yield('articles')
                @yield('article')
                @yield('createArticle')
                @yield('register')
                @yield('login')
                @include('messages.success')
            </div>
            {{-- <div>
                    <p>Bienvenu sur notre projet Laravel 101</p>
                </div> --}}
        </main>
    </div>
</body>

</html>
