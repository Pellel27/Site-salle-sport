@extends('base')

@section('page_title', 'contact')

@section('vite')
    @parent
    @vite(['resources/css/app.css'])
@endsection

@section('content')

    <h1>contact</h1>

    <h2>Salle de Sport</h2>

    <p>Téléphone: 06 00 00 00 00 </p> 
    <p>adresse :5 Bd Louis XIV, 59800 Lille</p> 
   
   {{-- <p> {!!$carte!!}</p> --}}

        
@endsection