<nav class="navbar navbar-default" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">
            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
            MyMovies
        </a>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="newfilm.php">Ajouter un Film</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="admin.php"><span class="glyphicon glyphicon-cog"></span>
                    Administration</a></li>
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

<script charset="utf-8">
alert("test");
$(document).ready(function() {
    var str = location.href.toLowerCase();
    $(".nav li a").each(function() {
        alert(this.href);
        if (str.indexOf(this.href.toLowerCase()) > -1) {
            $("li.active").removeClass("active");
            $(this).parent().addClass("active");
        }
    });
})
</script>
