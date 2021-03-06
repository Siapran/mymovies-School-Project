<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>MyMovies</title>
</head>
<body>

    <nav class="navbar navbar-default" role="navigation">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                MyMovies
            </a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li class="active"><a href="#">Film</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="admin.html">
                        <span class="glyphicon glyphicon-cog"></span>
                        Administration
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span>
                        Utilisateur
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profil</a></li>
                        <li><a href="#">Déconection</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="well">
            <div class="row">
                <div class="col-md-5">
                    <div class="thumbnail">
                        <img src="img/Pacific-Rim-Poster.jpg" alt="Poster" />
                    </div>
                </div>
                <div class="col-md-7">
                    <h1>Pacific Rim</h1>
                    <h2>Guillermo del Toro, 2013</h2>
                    <p>
                        Surgies des flots, des hordes de créatures monstrueuses venues d’ailleurs, les «Kaiju», ont déclenché une guerre qui a fait des millions de victimes et épuisé les ressources naturelles de l’humanité pendant des années. Pour les combattre, une arme d’un genre nouveau a été mise au point : de gigantesques robots, les «Jaegers», contrôlés simultanément par deux pilotes qui communiquent par télépathie grâce à une passerelle neuronale baptisée le «courant». Mais même les Jaegers semblent impuissants face aux redoutables Kaiju. Alors que la défaite paraît inéluctable, les forces armées qui protègent l’humanité n’ont d’autre choix que d’avoir recours à deux héros hors normes : un ancien pilote au bout du rouleau (Charlie Hunnam) et une jeune femme en cours d’entraînement (Rinko Kikuchi) qui font équipe pour manoeuvrer un Jaeger d’apparence obsolète. Ensemble, ils incarnent désormais le dernier rempart de l’humanité contre une apocalypse de plus en plus imminente…
                    </p>
                    <button class="btn btn-primary" type="button"><span class="glyphicon glyphicon-edit"></span> Éditer</button>
                </div>
            </div>
        </div>
    </div>

    <footer class="container">
        <hr>
        <p>
            Copié de <a href="http://polytechlyon-isi1web.github.io/projects/mymovies-static">Baptiste Pesquet</a> avec <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> par <a href="https://github.com/Siapran">Siapran Candoris</a>.
        </p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
