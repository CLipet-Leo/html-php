<!--nav bar + dropdown structure -->
<ul id="dropdown1" class="dropdown-content deep-orange accent-3">
    <li><a href="projet1.php" class="white-text">Projet 1</a></li>
    <li class="divider"></li>
    <li><a href="projet2.php" class="white-text">Projet 2</a></li>
    <li class="divider"></li>
    <li><a href="projet3.php" class="white-text">Projet 3</a></li>
</ul>
<div class="navbar-fixed">
    <nav class="acceuil">
        <div class="nav-wrapper deep-orange accent-3">
            <a href="#!" class="brand-logo">Portfolio</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <!-- bouton d'inscription -->
                <li><a href="action/signup.php">Inscription</a></li>
                <!-- bouton de connexion -->
                <li><a href="action/login.php">Connexion</a></li>
                <li><a href="#team">Équipe</a></li>
                <li><a href="#carousel">Présentation</a></li>
                <li><a class="modal-trigger" href="#modal1">Support</a></li>
                <!-- Dropdown Trigger -->
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Projets<i
                            class="material-icons right">view_module</i></a></li>
            </ul>
        </div>
    </nav>
</div>
<ul class="sidenav" id="mobile-demo">
    <li class="active"><a href="index.php">Accueil</a></li>
    <li class="active"><a href="projet1.php">Projet 1</a></li>
    <li class="active"><a href="projet2.php">Projet 2</a></li>
    <li class="active"><a href="projet3.php">Projet 3</a></li>
</ul>