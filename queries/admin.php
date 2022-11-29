<?php 
require_once "cfg/config.php";

//je peux vérifier si l'utilisateur admin est connecté ou non
if(isset($_SESSION['user']) AND $_SESSION['user']['admin']==1){
    echo "Bonjour, administrateur ".$_SESSION['user']['login'];
}

//isset permet de vérifier si une variable existe
?>