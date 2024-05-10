<!doctype html>
<html lang="en">

<!-- http://mvc/?action=index -->
<!--views  => http://mvc/?controller=home&action:index -->
<!--controller traaitement logique=> http://mvc/?controller (require home.controller.php =>index)=home&action(home.controller.php => index):index -->
<!-- Dans le cas de la recupération de Data --
passage du controller =>
artiste.controller.php
besoins de donnees avec le fichier :
        artistes.manager.php => getAllArtist()
puis par la views
-->

    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
            <?php require '../views/_navigation.html.php' ?>
        </header>
        <main>
            <?php require $template ?>
            <!-- <?= $action() ?> mauvaise methode -->
            <!-- appel de l'action du index.html.php de home et modification de la function_exists($action) du dossier public  -->
            
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
