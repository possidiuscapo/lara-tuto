@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('content')
    <h2>Articles</h2>
@endsection

@section('articles')
    {{-- @forelse ($articles as $article)
        <p>{{ $article['title'] }} </p>
        <p>{{ $article['body'] }} </p>
    @empty
        <p>Pas d'articles disponible</p>
    @endforelse --}}
    @each('partials.article', $articles, 'article', 'partials.no-articles')

    {{-- @if ($articles)
        @foreach ($articles as $article)
            @include('articles.index')
        @endforeach
    @else
        @include('articles.no-artciles')
    @endif 

     @forelse ($articles as $article)
        @include('articles.index')
    @empty

        @include('articles.no-artciles')
    @endforelse --}}
@endsection
