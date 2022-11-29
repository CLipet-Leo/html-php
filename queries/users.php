<?php 
require_once "cfg/config.php";

//je peux vérifier si l'utilisateur est connecté ou non
if(isset($_SESSION['user'])){ //vérifie si le resultat est vide !
    echo "Bienvenue ".$_SESSION['user']['login'];
}else{
    echo "Vous n'êtes pas connecté";
}
?>