<?php 
require "cfg/config.php";
session_start();

//je peux vérifier si l'utilisateur admin est connecté ou non
if(isset($_SESSION['user']) AND $_SESSION['user']['admin']==1){
    echo "Bonjour, administrateur ".$_SESSION['user']['login'];
}else{
    echo "Vous n'êtes pas connecté";
}

//isset permet de vérifier si une variable existe
?>