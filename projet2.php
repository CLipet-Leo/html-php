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

<body id="site-music">
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
            <div class="nav-wrapper red">
                <div class="card-title">
                    <a href="#!" class="brand-logo center">Musique</a>
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
        <div class="parallax"><img src="img/backgrounds-for-music.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport"></div>
    </div>

    <!-- Titre -->
    <h1 class="center">Rock, Mix et Blues</h1>

    <div id="text-pictures" class="container">
        <div id="music">
            <!-- premiere partie -->
            <div class="row darken-1">
                <div class="col s12 m6">
                    <img class="materialboxed" src="img/rock.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport">
                </div>
                <div class="col s12 m6">
                    <p>
                        Le Rock, une passion pour les musiciens fan de rythmes dansant et frénétique.
                        Freddie Mercury, Brian May, Axel Rose, Slash, Brian Johnson, Phil Collins, James Hetfild.
                        Des légendes qui ont révolutionné le Rock.
                    </p>
                </div>
            </div>
            <div class="row darken-2">
                <p> Guitare (électrique), batterie, basse, chant et piano sont les principaux instruments utilisés. </p>
            </div>

            <!-- deuxieme partie -->
            <div id="second" class="row darken-2">
                <div class="col s12 m6">
                    <p>
                        Le Mix part majeur de la musique dansante avec ses effets et assemblages de musiques et genres
                        différents
                        <br>
                        David Guetta, Martin Garrix, Afrojack, Marshmello, Calvin Harris sont les rois du mix et font
                        danser jusqu'au bout de la nuit
                    </p>
                </div>
                <div class="col s12 m6" id="easteregg2">
                    <img class="materialboxed" src="img/dj-controller-background.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport">
                </div>
            </div>

            <!-- troisieme partie -->
            <div class="row darken-2">
                <div class="col s12 m6">
                    <img class="materialboxed" src="img/blues.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport">
                </div>
                <div class="col s12 m6">
                    <p>
                        Le blues, Forme musicale élaborée par les Noirs des États-Unis d'Amérique, aussi belle
                        qu'entrainante le blues est un mélange de jazz et de rock finement harmonisé pour donner cette
                        merveille musical.
                    </p>
                </div>
            </div>
            <div class="row darken-2 2">
                <p> Jimmy Hendrix, Eric Clapton, B.B King, Ray Charles, Norah Jones, Louis Armstrong, Nina Simone sont
                    les artistes les plus marquant aillant eu un impact sur toute le domaine musicale même moderne<br>
                    Les instruments principaux sont les instruments à cordes comme la basse, la guitare, steel guitare,
                    la contrebasse, le violoncelle, l'alto, le violon mais aussi le saxophone, l'harmonica, la batterie,
                    lap steel, le bottleneck et le piano. </p>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="page-footer red" id="support">
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