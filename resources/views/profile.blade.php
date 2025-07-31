@extends('layouts.app')

@section('title', 'Mon Profil')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
    <h2>Bienvenue, {{ auth()->user()->name }}</h2>
    <p>Email : {{ auth()->user()->email }}</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Déconnexion</button>
    </form>
@endsection
