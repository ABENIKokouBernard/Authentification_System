@extends('layouts.app')

@section('title', 'Inscription')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <h2>Créer un compte</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label>Nom :</label><br>
        <input class="nom" type="text" name="name" placeholder="votre nom" value="{{ old('name') }}"><br>
        @error('name') <div class="error">{{ $message }}</div> @enderror

        <label>Email :</label><br>
        <input class="email" type="email" name="email" placeholder="votre email" value="{{ old('email') }}"><br>
        @error('email') <div class="error">{{ $message }}</div> @enderror

        <label>Mot de passe :</label><br>
        <input class="password" type="password" name="password" placeholder="votre password"><br>
        @error('password') <div class="error">{{ $message }}</div> @enderror

        <label>Confirmer mot de passe :</label><br>
        <input class="password" type="password" name="password_confirmation" placeholder="confirmer password"><br>

        <button type="submit">S'inscrire</button>
    </form>

    <p><strong>Déjà un compte ?</strong> <a href="{{ route('login') }}">Se connecter</a></p>
@endsection
