<?php
print_r($_POST);
require_once "../cfg/config.php"; 
$sql = "DELETE FROM user WHERE id=:id";
$dataBinded=array(
    ':id' => $_POST['id']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);


header('Location:../index.php');
?>