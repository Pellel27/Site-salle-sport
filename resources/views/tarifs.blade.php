@extends('base')

@section('title', 'Tarifs')

    @section('vite')
        @parent
        @vite(['resources/css/app.css'])
    @endsection

    @section('content')
        <h1>Tarifs</h1>
        <p> adhésion annuelle à l'associtation : 15 eur</p>
        <p> la séance : 10 eur</p>
        <p>le carnet de 10 séances : 90 eur</p>
        <p> abonnement mensuel illimité sans cours : 30 eur</p>
        <p> abonnement mensuel illimité avec cours : 60 eur</p>
    @endsection