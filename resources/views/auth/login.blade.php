@extends('layouts.app')

@section('title', 'Connexion')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <h2>Connexion</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label>Email :</label><br />
        <input class="email" type="email" name="email" placeholder="votre email" value="{{ old('email') }}"><br>
        @error('email') <div class="error">{{ $message }}</div> @enderror

        <label>Mot de passe :</label><br>
        <input class="password" type="password" name="password" placeholder="votre password"><br>
        @error('password') <div class="error">{{ $message }}</div> @enderror

        <button type="submit">Se connecter</button>
    </form>

    <p><strong>Pas encore de compte ? </strong><a href="{{ route('register') }}">Créer un compte</a></p>
@endsection
