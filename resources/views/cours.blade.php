@extends('base')

@section('title', 'Cours')

@section('vite')
    @parent
    @vite(['resources/css/app.css'])
@endsection

@section('content')
    {{-- le nom du site --}}
    <h1>Salle de Sport</h1>
    {{-- Nom de la page Cours --}}
    <h2>Cours</h2>

    {{-- les activités et les heures disponibles --}}
    <h5>Zumba</h5>
    <p>lundi: 19h à 21h</p>

    <h5>Pilate</h5>
   <p>mardi: 19h30 à 21h30 </p> 

   <h5>Anglaise</h5>
   <p>jeudi: 20h à 22h boxe </p>

   <h5>Hiit</h5>
   <p>vendredi: 20h à 22h </p>

   <h5>Yoga</h5>
   <p>samedi: 9h à 11h </p>
   @endsection