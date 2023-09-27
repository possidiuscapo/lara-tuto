@extends('layouts.master')

@section('title')
    S'inscrire
@endsection

@section('register')
    <form action="/register" method="GET" enctype="multipart/form-data">
        <div class="">
            <label for="name">Nom</label>
            <input type="text" name="name" id="name">
            @error('name')
                <div> {{ $message }} </div>
            @enderror
        </div>
        <div class="">
            <label for="mail">Email</label>
            <input type="email" name="email" id="mail">
            @error('email')
                <div> {{ $message }} </div>
            @enderror
        </div>
        <div class="">
            <label for="pwd">Mot de passe</label>
            <input type="password" name="password" id="pwd">
            @error('password')
                <div> {{ $message }} </div>
            @enderror
        </div>
        <div class="">
            <label for="pwd_conf">Confirmer le mot de passe</label>
            <input type="password" name="password" id="pwd_conf">
            @error('password')
                <div> {{ $message }} </div>
            @enderror
        </div>
        <button type="submit">S'inscrire</button>
    </form>
@endsection
