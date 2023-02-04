@extends('base')

@section('title', 'Accueil')

@section('vite')
    @parent
    @vite(['resources/css/app.css'])
@endsection

@section('content')
    <h2>Accueil </h2>
    <p> Bienvenue à la page d'accueil</p>
    <img src="{{ asset('img/Salle-De-Sport.jpg') }}" alt="Salle de Sport">
    <img src="{{ asset('img/Sport-Pratiquer.jpg') }}" alt="Les gens pratiquent le sport"><br />
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos voluptas ea dolorem eius possimus fuga a hic doloremque maiores odit, quibusdam porro illum sunt dignissimos quam nihil. Reprehenderit, quod eligendi.
@endsection