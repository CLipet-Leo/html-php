<!-- #connexion.php -->
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
  <h1 class="center white-text">Connexion</h1>
  <form method="post" action="action/login.php">
    <div class="row">
    <div class="input-field col m6 offset-m3" >
            <input type='email' name='email' />
            <label for="email">Email</label>
        </div>
        <div class="input-field col m6 offset-m3" >
            <input type='password' name='password' />
            <label for="password">Mot de passe</label>
        </div>
        <div class="center">
                <button class="btn waves-effect waves-light deep-orange" type='submit' value='Me connecter'>Me connecter</button>
        </div>
    </div>
        
  </form>
  <?php 
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
  ?>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
 </body>
</html>