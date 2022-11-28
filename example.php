<!-- signup -->

<?php /*
$sql = "SELECT * FROM user WHERE username=:username AND password=SHA1(:password)";
$dataBinded=array(
    ':username'   => $_POST['username'],
    ':password'=> $_POST['password']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
     echo "Utilisateur ou mot de passe incorrect !";
}else{
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
}

header('Location: ../index.php')
*/?>

<!-- login -->

<?php // require_once "config.php"; ?>
<html>
<head>
</head>
<body>
    <?php //require "menu.php"; ?>
    <h1>Connexion</h1>
    <form method="post" action="login.php">
        <input type='email' name='email' />
        <input type='password' name='password' />
        <input type='submit' value='Me connecter' />
    </form>
</body>
</html>

<!-- logout -->

<?php
 /*
session_start();
unset($_SESSION['user']);
header('location: ../index.php');
*/
?>