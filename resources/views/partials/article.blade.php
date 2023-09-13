<article>
    <h4>Article écrit par {{ $article->user->name }}</h4>
    <a href="/article/{{ $article->id }}">
        {{ $article['title'] }}
    </a>
</article>
