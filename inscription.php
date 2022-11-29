<!-- #inscription.php -->
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
  <?php require "menu.php"; ?>
<h1 class="center">Inscription</h1>
<form method="post" action="action/signup.php">
    <div class="row">
        <div class="input-field col m6 offset-m3" >
            <input type='email' name='email' />
            <label for="email">Email</label>
        </div>
        <div class="input-field col m6 offset-m3" >
            <input type='password' name='password' />
            <label for="password">Mot de passe</label>
        </div>
        <div class="input-field col m6 offset-m3">
            <input type='text' name='login' />
            <label for="text">Pseudo</label>
        </div>
        <input class="btn waves-effect waves-light deep-orange accent-3 col m2 offset-m5" type='submit' value="M'inscrire" />
    </div>  
</form>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
 </body>
</html>