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

<body id="site-dangan">
    <!--nav bar + dropdown structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="projet1.html">Projet 1</a></li>
        <li class="divider"></li>
        <li><a href="projet2.html">Projet 2</a></li>
        <li class="divider"></li>
        <li><a href="projet3.html">Projet 3</a></li>
    </ul>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper deep-purple">
                <div class="card-title">
                    <a href="#!" class="brand-logo center">Dongaronpa</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li class="active"><a href="index.html">Accueil</a></li>
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
        <li class="active"><a href="index.html">Accueil</a></li>
        <li class="active"><a href="projet1.html">Projet 1</a></li>
        <li class="active"><a href="projet2.html">Projet 2</a></li>
        <li class="active"><a href="projet3.html">Projet 3</a></li>
    </ul>

    <!-- parallax -->
    <div class="parallax-container hide-on-small-only">
        <div class="parallax"><img src="img/diagonal-rainbow.jfif" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport"></div>
    </div>

    <!-- Titre -->
    <h1 class="center">Danganronpa V3</h1>

    <!-- content -->
    <div id="text-pictures" class="container">
        <div id="dangan">
            <!-- premiere partie -->
            <div class="row darken-1">
                <div class="col s12 m6" id="easteregg1">
                    <img class="materialboxed" src="img/projet1.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport">
                    
                </div>
                <div class="col s12 m6">
                    <p>
                        Premier projet réalisé ensemble sur le jeu vidéo Danganronpa. Nous avions eu une semaine pour
                        créer
                        un
                        site internet à l'aide du language html et CSS.
                    </p>
                </div>
            </div>
            <div class="center row darken-2">
                <p> Un apprentissage de 0 pour moi (Tom) et une continuité pour Léo. A l'aide de l'intervenant et du
                    travail
                    fait en amont. Nous avons beacoup appris sur la gestions en binôme. </p>
            </div>

            <!-- deuxieme partie -->
            <div class="row darken-2">
                <div class="col s12 m6">
                    <p> Nous avons tout les deux appris le début du métier de développeur WEB et de designer. Notre
                        trvail
                        bien que fait à la sueur de nos fronts n'était pas parfait.<br> Manque d'optimisation et
                        utilisation
                        obselète de html nous on value de précieux conseil de notre intervenant.
                    </p>
                </div>
                <div class="col s12 m6">
                    <img id="easter-egg-capybara" class="materialboxed right-align" src="img/picture-danganronpa-2.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport">
                </div>
            </div>

            <!-- troisieme partie -->
            <div class="row darken-2">
                <div class="col s12 m6">
                    <img class="materialboxed left-align" src="img/picture-danganronpa-3.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport">
                </div>
                <div class="col s12 m6">
                    <p>
                        Notre site est basé sur une couleur noir pour rappeler le côté sombre du jeu et d'un rose très
                        proncé car le sang du jeu est censuré en rose
                    </p>
                </div>
            </div>
            <div class="center row darken-2">
                <p> En résumé le premier projet à été fort en apprentissage et nous avons adoré créer notre premier
                    site.</p>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="page-footer deep-purple" id="support">
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