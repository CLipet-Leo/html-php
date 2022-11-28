<?php
$sql = "INSERT INTO user(email,password) VALUES(:email,:password)";
$dataBinded=array(
    ':email'   => $_POST['email'],
    ':password'=> $_POST['password']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location: ../index.php')

?>