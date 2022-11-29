<?php 
require "cfg/config.php";

$_SESSION['user'] = $user;

//je peux vérifier si l'utilisateur est connecté ou non
if(isset($_SESSION['user'])){
    echo "Bonjour ".$_SESSION['user']['login'];
}else{
    echo "Vous n'êtes pas connecté";
}

//isset permet de vérifier si une variable existe

//unset($_SESSION['user']);
?>