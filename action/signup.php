<!-- #signup.php -->
<?php 
require_once "../cfg/config.php"; 
$sql = "INSERT INTO user(email,password,login) VALUES(:email,:password,:login)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password'],
    ':login'=> $_POST['login']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
if(empty($_POST['email'])){
  $_SESSION['error']="E-mail vide";
  header('Location:../inscription.php'); 
}else if(empty($_POST['password'])){
  $_SESSION['error']="Mot de passe vide";
  header('Location:../inscription.php'); 
}else if(empty($_POST['login'])){
  $_SESSION['error']="Pseudo vide";
  header('Location:../inscription.php'); 
}else{
    $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
    header('Location:../index.php');//on le redirige sur la page d'accueil du site !
}
?>