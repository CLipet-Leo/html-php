<?php /*
$sql = "SELECT * FROM user WHERE username=:username AND password=SHA1(:password)";
$dataBinded=array(
    ':username'   => $_POST['username'],
    ':password'=> $_POST['password']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$user = $pre->fetch(PDO::FETCH_ASSOC);
if(empty($user)){ //vérifie si le resultat est vide !
     //non connecté
     echo "Utilisateur ou mot de passe incorrect !";
}else{
     $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
}

header('Location: ../index.php')
*/?>