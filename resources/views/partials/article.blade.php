{{-- @extends('articles.articles') --}}
<article>
    <h3>Article écrit par {{ $article->user->name }}</h3>
    <a href="/article/{{ $article->id }}">
        <p>{{ $article->title }} </p>
    </a>
    <p>{{ $article['body'] }} </p>
</article>
