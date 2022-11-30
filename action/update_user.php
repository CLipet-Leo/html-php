<?php 
require_once "../cfg/config.php";

//je peux vérifier si l'utilisateur admin est connecté ou non
if(isset($_SESSION['user']) AND ($_SESSION['user']['admin']=1)){
    $_SESSION['user']['admin']=0;
}else{
    $_SESSION['user']['admin']=1;
}
header('Location:../index.php');
?>