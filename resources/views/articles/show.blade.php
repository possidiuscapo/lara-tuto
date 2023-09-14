@extends('layouts.master')

@section('title')
    Article {{$article->id}}
@endsection

@section('article')
    <h3>Article</h3>

    <div>
        <p>{{ $article['title'] }}</p>
        <p>{{ $article->body }} </p>
        <a href="/article/{{ $article->id }}/edit">Editer l'article</a>
    </div>
    @foreach($article->comments as $comment)
    <p><strong>{{ $comment->user->name }}</strong> a réagi :</p>
    <p>{{ $comment->comment }}</p>
    <p><small>{{ $comment->created_at->diffForHumans() }}</small></p>
    @endforeach
@endsection

