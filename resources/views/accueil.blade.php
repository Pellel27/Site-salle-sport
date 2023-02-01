@extends('base')

@section('title', 'Accueil')

@section('vite')
    @parent
    @vite(['resources/css/app.css'])
@endsection

@section('content')
    <h1>Accueil</h1>
    <h2>Salle de Sport</h2>
    <p> Bienvenue à la page d'accueil</p>
    <img src="{{ asset('img/Salle-De-Sport.jpg') }}" alt="Salle de Sport">
    <img src="{{ asset('img/Sport-Pratiquer.jpg') }}" alt="Les gens pratiquent le sport">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
@endsection