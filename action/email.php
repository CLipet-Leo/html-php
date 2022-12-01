<?php
$email = "tforest@gaming.tech";
$objet = $_POST['objet'];
$content = $_POST['message']."<br><br>Email from : ".$_POST['email'];
print_r($email,$content);
if(mail($email,$objet,$content)){
    echo "email ok";
}else{
    echo "error";
}
header('Location:../index.php');
?>