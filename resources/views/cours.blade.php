@extends('base')

@section('title', 'Cours')

@section('vite')
    @parent
    @vite(['resources/css/app.css'])
@endsection

@section('content')
    <h1>Cours</h1>
    <h2>Salle de Sport</h2>
    <p>lundi: 19h à 21h zumba</p> 
   <p>mardi: 19h30 à 21h30 pilate</p> 
   <p>jeudi: 20h à 22h boxe anglaise</p>
   <p>vendredi: 20h à 22h hiit</p>
   <p>samedi: 9h à 11h yoga</p>
   @endsection