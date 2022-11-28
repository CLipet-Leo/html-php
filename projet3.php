<!DOCTYPE html>
<html>

<head>
    <meta charset=UTF-8>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="css/style-projet.css" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body id="site-sport">
    <!--nav bar + dropdown structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="projet1.php">Projet 1</a></li>
        <li class="divider"></li>
        <li><a href="projet2.php">Projet 2</a></li>
        <li class="divider"></li>
        <li><a href="projet3.php">Projet 3</a></li>
    </ul>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper green darken-1">
                <div class="card-title">
                    <a href="#!" class="brand-logo center"> Introduction au sport</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li class="active"><a href="index.php">Accueil</a></li>
                        <li class="active"><a href="#">Infos</a></li>
                        <li class="active"><a href="#">Support</a></li>
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Projets<i
                                    class="material-icons right">view_module</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-demo">
        <li class="active"><a href="index.php">Accueil</a></li>
        <li class="active"><a href="projet1.php">Projet 1</a></li>
        <li class="active"><a href="projet2.php">Projet 2</a></li>
        <li class="active"><a href="projet3.php">Projet 3</a></li>
    </ul>

    <!-- parallax -->
    <div class="parallax-container hide-on-small-only">
        <div class="parallax"><img src="img/sport-background.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport"></div>
    </div>

    <div id="text-pictures" class="container">
        <div id="sport">
            <!-- Titre -->
            <h1 class="center">Handball, Basketball et Volleyball</h1>

            <!-- premiere partie -->
            <div class="row darken-1">
                <div class="col s12 m6" id="easteregg3">
                    <img class="materialboxed" src="img/handball.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport">
                </div>
                <div class="col s12 m6">
                    <p id="text">
                        Au handball, le but du jeu est de faire entrer le ballon dans le but adverse plus de fois que
                        son adversaire en utilisant uniquement les mains pour manipuler le ballon. Le principe est de
                        dribbler avec le ballon ou, faire une passe à un coéquipier.
                    </p>
                </div>
            </div>
            <div class="row darken-2">
                <p> Sport collectif intense, regroupant agilité, déxtérité et intelligence. Il mettra à l'épreuve votre
                    cardio et vos muscle. </p>
            </div>

            <!-- deuxieme partie -->
            <div id="second" class="row darken-2">
                <div class="col s12 m6">
                    <p>
                        Le basket est un sport très abordable qui ne nécessite que très peu d’équipement et les règles
                        de base sont accessibles à tous.
                        Un tir réussi en cours de jeu compte 2 points à l’intérieur de la zone des 6,25 m (ou 6,75 m
                        selon le niveau de pratique) et 3 points à l’extérieur de cette zone. Un tir de lancer-franc
                        compte 1 point.
                    </p>
                </div>
                <div class="col s12 m6" id="easteregg4">
                    <img class="materialboxed" src="img/basketball_background.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport">
                </div>
            </div>

            <!-- troisieme partie -->
            <div class="row darken-2">
                <div class="col s12 m6">
                    <img class="materialboxed" src="img/volley.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport">
                </div>
                <div class="col s12 m6">
                    <p>
                        Le volley-ball est un sport qui oppose 2 équipes sur un terrain de jeu divisé par un filet. Le
                        but du jeu est de faire tomber le ballon dans le camp adverse, et de l'empêcher de toucher le
                        sol de son propre camp, en l'envoyant réglementairement par dessus le filet. Le ballon est mis
                        en jeu par un service.
                    </p>
                </div>
            </div>
            <div class="row darken-2 2">
                <p> Le Volleball demande une maîtrise des techniques correcte pour pouvoir comencé en revanche il est
                    etrêmement apprécié par les joueurs expérimenté </p>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="page-footer green darken-1" id="support">
        <div class="container">
            <div class="row">
                <div class="center">
                    <h5 class="white-text">Merci d'avoir lu</h5>
                    <p class="grey-text text-lighten-4">Cette page à été créé lors d'un projet javascript framwork
                        et est amené à changer par la suite dans notre Portfolio</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2022 Copyright
            </div>
        </div>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

</body>

</html>