<!-- #signup.php -->
<?php
require_once "../cfg/config.php";
$sql = "INSERT INTO user(email,password,login) VALUES(:email,SHA1(:password),:login)";
$dataBinded = array(
  ':email'   => $_POST['email'],
  ':password' => "fguzhyfaoizej6136jh1Hbeéç".$_POST['password'],
  ':login' => $_POST['login']
);
if (($_SESSION['error'] = "E-mail vide") or ($_SESSION['error'] = "Mot de passe vide") or ($_SESSION['error'] = "Pseudo vide")) {
  header('Location:../inscription.php');
}
if (empty($_POST['email'])) {
  $_SESSION['error'] = "E-mail vide";
} else if (empty($_POST['password'])) {
  $_SESSION['error'] = "Mot de passe vide";
} else if (empty($_POST['login'])) {
  $_SESSION['error'] = "Pseudo vide";
} else {
  $pre = $pdo->prepare($sql);
  $pre->execute($dataBinded);
  $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
  header('Location:../index.php'); //on le redirige sur la page d'accueil du site !
}
?>