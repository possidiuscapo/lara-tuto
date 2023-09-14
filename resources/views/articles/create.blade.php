@extends('layouts.master')

@section('title')
    Create
@endsection

@section('createArticle')
<h3>Créer un article</h3>
<form action="create" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    @include('partials.article-form')
</form>
@endsection
