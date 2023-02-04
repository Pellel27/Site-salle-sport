@extends('base')

@section('page_title', 'contact')

@section('vite')
    @parent
    @vite(['resources/css/app.css'])
@endsection

@section('content')

        <h2>contact</h2>
        <p>Téléphone: 06 00 00 00 00 </p> 
        {{-- adresse du CNAM de Lille --}}
        adresse :5 Bd Louis XIV, 59800 Lille<br> 
        
    {{-- Ajout de la carte de localisation  --}}
        <p> {<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10123.668230233567!2d3.0711753!3d50.6286576!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d59118928ab7%3A0xd0f3b05faaf1c4c!2sLe%20Cnam!5e0!3m2!1sfr!2sfr!4v1675333657618!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>}}</p>
        {{-- Le formulaire de contact --}}
    <form action="ContactController.php" method="post">
        <input type="text" name="text" placeholder="votre demande"><br>
        <input type="email" name="email" placeholder="Entrez votre email"><br>
        <input type="text" name="text" placeholder="Votre message"><br>
       {{-- Le boutton pour envoyer un message --}}
        <input type="submit" value="Envoi le message">
        {{-- <button type="submit"></button> --}}
    </form>      
@endsection