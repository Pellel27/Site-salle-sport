<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Accueil</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
        @section('vite')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @show
    </head>
    <body>
        <h2>Salle de Sport</h2>
        <header>
            <nav>
                <ul> 
                    <li><a href="accueil"> Accueil</a></li>
                    <li><a href="contact"> Contact</a></li>
                    <li><a href="tarifs"> Tarifs</a></li>
                    <li><a href="cours"> Cours</a></li>
                </ul>
            </nav>
        </header>    
        @section('content')
        @show
        <footer>
            <ul> 
                <li><a href="contact"> Contact</a></li>
                <li><a href="mention-legale"> Mentions légales</a></li>
            </ul>
        </footer>
    </body>
</html>