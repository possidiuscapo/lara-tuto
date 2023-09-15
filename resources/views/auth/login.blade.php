@extends('layouts.master')

@section('login')
    <form action="/login" method="GET" enctype="multipart/form-data">
        <div class="">
            <label for="mail">Votre email</label>
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
        <button type="submit">Se connecter</button>
    </form>
@endsection
