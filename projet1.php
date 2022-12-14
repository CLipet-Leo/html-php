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
        <li><a href="projet1.php">Projet 1</a></li>
        <li class="divider"></li>
        <li><a href="projet2.php">Projet 2</a></li>
        <li class="divider"></li>
        <li><a href="projet3.php">Projet 3</a></li>
    </ul>
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper deep-purple">
                <div class="card-title">
                    <a href="#!" class="brand-logo center">Dongaronpa</a>
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
        <div class="parallax"><img src="img/diagonal-rainbow.jfif" alt="Portfolio - L??o Clipet - Tom Forest - Danganronpa - musique - sport"></div>
    </div>

    <!-- Titre -->
    <h1 class="center">Danganronpa V3</h1>

    <!-- content -->
    <div id="text-pictures" class="container">
        <div id="dangan">
            <!-- premiere partie -->
            <div class="row darken-1">
                <div class="col s12 m6" id="easteregg1">
                    <img class="materialboxed" src="img/projet1.jpg" alt="Portfolio - L??o Clipet - Tom Forest - Danganronpa - musique - sport">
                    
                </div>
                <div class="col s12 m6">
                    <p>
                        Premier projet r??alis?? ensemble sur le jeu vid??o Danganronpa. Nous avions eu une semaine pour
                        cr??er
                        un
                        site internet ?? l'aide du language html et CSS.
                    </p>
                </div>
            </div>
            <div class="center row darken-2">
                <p> Un apprentissage de 0 pour moi (Tom) et une continuit?? pour L??o. A l'aide de l'intervenant et du
                    travail
                    fait en amont. Nous avons beacoup appris sur la gestions en bin??me. </p>
            </div>

            <!-- deuxieme partie -->
            <div class="row darken-2">
                <div class="col s12 m6">
                    <p> Nous avons tout les deux appris le d??but du m??tier de d??veloppeur WEB et de designer. Notre
                        trvail
                        bien que fait ?? la sueur de nos fronts n'??tait pas parfait.<br> Manque d'optimisation et
                        utilisation
                        obsel??te de html nous on value de pr??cieux conseil de notre intervenant.
                    </p>
                </div>
                <div class="col s12 m6">
                    <img id="easter-egg-capybara" class="materialboxed right-align" src="img/picture-danganronpa-2.jpg" alt="Portfolio - L??o Clipet - Tom Forest - Danganronpa - musique - sport">
                </div>
            </div>

            <!-- troisieme partie -->
            <div class="row darken-2">
                <div class="col s12 m6">
                    <img class="materialboxed left-align" src="img/picture-danganronpa-3.jpg" alt="Portfolio - L??o Clipet - Tom Forest - Danganronpa - musique - sport">
                </div>
                <div class="col s12 m6">
                    <p>
                        Notre site est bas?? sur une couleur noir pour rappeler le c??t?? sombre du jeu et d'un rose tr??s
                        pronc?? car le sang du jeu est censur?? en rose
                    </p>
                </div>
            </div>
            <div class="center row darken-2">
                <p> En r??sum?? le premier projet ?? ??t?? fort en apprentissage et nous avons ador?? cr??er notre premier
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
                    <p class="grey-text text-lighten-4">Cette page ?? ??t?? cr???? lors d'un projet javascript framwork
                        et est amen?? ?? changer par la suite dans notre Portfolio</p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                ?? 2022 Copyright
            </div>
        </div>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>