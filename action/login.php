<!-- #login.php -->
<?php 
require_once "../cfg/config.php"; 
$sql = "SELECT * FROM user WHERE email=:email AND password=SHA1(:password)"; 
$pre = $pdo->prepare($sql); 
$dataBinded=array(
     ':username'=>$_POST['username'],
     ':password'=>$_POST['password']
);
$pre->execute();
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($_POST['email'])){
     $_SESSION['error']="E-mail : valeur inconnue";
     header('Location:../connexion.php'); 
     exit();
}else if(empty($_POST['password'])){
     $_SESSION['error']="Mot de passe faux";
     header('Location:../connexion.php');
     exit();
}else if(empty($user)){ //vérifie si le resultat est vide !
     $_SESSION['error']="Utilisateur inconnu";
     header('Location:../connexion.php');
     exit();
}else{
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
     header('Location:../index.php');//on le redirige sur la page d'accueil du site !
}
?>