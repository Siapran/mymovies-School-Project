<footer class="container">
    <hr>
    <p>
        Copié de <a href="http://polytechlyon-isi1web.github.io/projects/mymovies-static">Baptiste Pesquet</a> avec <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> par <a href="https://github.com/Siapran">Siapran Candoris</a>.
    </p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
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
