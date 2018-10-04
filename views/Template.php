<!Doctype html>
<html lang="fr">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../Contenu/style.css" />
        <title><?= $titre ?></title>   <!-- Élément spécifique -->
    </head>

</html>
<body>
<div id="global" class="container">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#"><span class="glyphicon glyphicon-home">Accueil</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Billet</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link " href="#">Register</a>
            </li>
            <li class="nav-item">

                <a class="nav-link mr-sm-2" href="#">Login</a>
            </li>
        </ul>

    </nav>
    <div class="jumbotron">
        <header>
            <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
            <p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
        </header>
    </div>

    <div id="contenu">
        <?= $contenu ?>   <!-- Élément spécifique -->
    </div>
    <footer id="piedBlog" class="btn-dark text-center">
        Blog réalisé avec PHP, HTML5 et CSS.
    </footer>
</div> <!-- #global -->

</body>
</html>
