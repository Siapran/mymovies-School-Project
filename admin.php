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
                <li><a href="#">Film</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
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
        <ul class="nav nav-tabs" id="table-tabs">
            <li class="active"><a href="#films" data-toggle="tab">Films</a></li>
            <li><a href="#users" data-toggle="tab">Utilisateurs</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade in active" id="films">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                Titre
                            </th>
                            <th>
                                Réalisateur
                            </th>
                            <th>
                                Année de sortie
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href="./film.html">Pacific Rim</a>
                            </td>
                            <td>
                                Guillermo del Toro
                            </td>
                            <td>
                                2013
                            </td>
                            <td>
                                <button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></button>
                                <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Mad Max: Fury Road</a>
                            </td>
                            <td>
                                George Miller
                            </td>
                            <td>
                                2015
                            </td>
                            <td>
                                <button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></button>
                                <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#">Imitation Game</a>
                            </td>
                            <td>
                                Morten Tyldum
                            </td>
                            <td>
                                2014
                            </td>
                            <td>
                                <button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></button>
                                <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tab-pane fade" id="users">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                Nom
                            </th>
                            <th>
                                Prénom
                            </th>
                            <th>
                                Login
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Diossy
                            </td>
                            <td>
                                Daisy
                            </td>
                            <td>
                                ddiossy
                            </td>
                            <td>
                                <button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></button>
                                <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Lésautre
                            </td>
                            <td>
                                Pacôme
                            </td>
                            <td>
                                plesautre
                            </td>
                            <td>
                                <button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></button>
                                <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Éluya
                            </td>
                            <td>
                                Chantal
                            </td>
                            <td>
                                celuya
                            </td>
                            <td>
                                <button class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></button>
                                <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
