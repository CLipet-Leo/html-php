<!DOCTYPE html>
<?php require_once "cfg/config.php"; ?>
<html>
<head>
<meta charset=UTF-8>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" >
    <link type="text/css" rel="stylesheet" href="css/style.css" >

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
</head>
<body>
    <?php require "component/menu.php"; ?>

    <?php
    $sql = "SELECT * FROM user"; 
    $pre = $pdo->prepare($sql); 
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);
   
    foreach($data as $user){ ?>
    <div class="bloc_user">
        <h2><?php echo $user['login'] ?></h2>
        <span class="email"><?php echo $user['email'] ?></span>
    </div>
    <?php } ?>
     

    <!-- parallax -->
    <div class="row hide-on-small-only">
        <div class="parallax-container col s12">
            <div class="parallax"><img src="img/orange.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport"></div>
        </div>
    </div>

    <!-- title -->
    <h1 class="center white-text">Accueil</h1>

    <!-- info card -->
    <div class="row" id="team">
        <div class="col s12 m5 l3 offset-m1 offset-l2">
            <div class="card blue-grey darken-2">
                <div class="card-image waves-effect waves-block waves-light">
                    <img id="tom" class="activator circle" src="img/tom.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport">
                </div>
                <div class="card-content">
                    <span class="card-title activator black-text text-darken-4">Tom FOREST<i
                            class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal blue-grey darken-2">
                    <span class="card-title black-text text-darken-4">Tom FOREST<i
                            class="material-icons right">close</i></span>
                    <p>Hey, c'est Tom geek et guitariste à ses heures perdues.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m5 l3 offset-l2">
            <div class="card blue-grey darken-2">
                <div class="card-image waves-effect waves-block waves-light">
                    <img class="activator circle" src="img/profil-moi.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport">
                </div>
                <div class="card-content">
                    <span class="card-title activator black-text text-darken-4">Léo CLIPET<i
                            class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal blue-grey darken-2">
                    <span class="card-title black-text text-darken-4">Léo CLIPET<i
                            class="material-icons right">close</i></span>
                    <p>
                        Salut ! <br>
                        Moi c'est Léo, élève chez Gaming Campus en Gtech 1.
                        Aussi joueur passionné, amateur de musique et de sons et funny as hell (d'après moi-même),
                        j'incarne la volonté non pas d'atteindre la perfection mais uniquement les objectifs que je me fixerais
                        et ce aussi dur qu'ils puissent être.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- caroussel -->
    <div class="row" id="carousel">
        <div class="col s12 m10 offset-m1">
            <div class="carousel carousel-slider center">
                <div class="carousel-item purple white-text">
                    <h2>Projet 1 : site internet Dongaronpa</h2>
                    <a href="projet1.php"><img src="img/projet1.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport" class="fixed-item center"></a>
                </div>
                <div class="carousel-item red white-text">
                    <h2>Projet 2 : Rock, Mix et Blues</h2>
                    <a href="projet2.php"><img src="img/blues.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport" class="fixed-item center"></a>
                </div>
                <div class="carousel-item amber white-text">
                    <h2>Projet 3 : Introduction au sports</h2>
                    <a href="projet3.php"><img src="img/volley.jpg" alt="Portfolio - Léo Clipet - Tom Forest - Danganronpa - musique - sport" class="fixed-item center"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Trigger -->
    <div class="center">
        <a class="waves-effect waves-light btn deep-orange accent-3 modal-trigger" href="#modal1">Support</a>
    </div>

    <!-- Modal Structure -->
    <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content valign-wrapper">
            <!-- support -->
            <div class="row s12">
                <div class="support-title">
                    <h2 class="center">Support</h2>
                </div>
                <form class="col s12 m10 offset-m1">
                    <div class="row">
                        <div class="input-field col m3 offset-m3">
                            <input placeholder="" id="first_name" type="text" class="validate">
                            <label for="first_name">Prénom</label>
                          </div>
                        <div class="input-field col m3">
                            <input placeholder="" id="last_name" type="text" class="validate">
                            <label for="last_name">Nom</label>
                        </div>
                        <div class="input-field col m4 offset-m4">
                            <i class="material-icons prefix">email</i>
                            <input placeholder="" id="email" type="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field col m4 offset-m4">
                            <i class="material-icons prefix">phone</i>
                            <input placeholder="" id="icon_telephone" type="tel" class="validate">
                            <label for="icon_telephone">Téléphone</label>
                        </div>
                        <button class="btn waves-effect waves-light deep-orange accent-3 col m2 offset-m5" type="submit"
                            name="action">Envoyer
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>

    <!-- footer -->
    <footer class="page-footer deep-orange accent-3">
        <div class="container">
            <div class="row">
                <div class="center">
                    <h5 class="white-text">Merci d'avoir lu</h5>
                    <p class="grey-text text-lighten-4">Cette page à été créé lors d'un projet javascript framwork
                        et est amené à changer par la suite</p>
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