@extends('layouts.master')

@section('article')
    <h3>Article</h3>

    <p>{{ $article['title'] }}</p>
    <p>{{ $article->body }} </p>
    
    @foreach($article->comments as $comment)
        <p><strong>{{ $comment->user->name }}</strong> a réagi :</p>
        <p>{{ $comment->comment }}</p>
        <p><small>{{ $comment->created_at->diffForHumans() }}</small></p>
    @endforeach

@endsection

