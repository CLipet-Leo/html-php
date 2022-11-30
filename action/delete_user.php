<?php 
require_once "../cfg/config.php"; 
$sql = "DELETE  FROM user WHERE login=:login";
$dataBinded=array(
    ':login' => $_POST['login']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


header('Location:../index.php');
?>