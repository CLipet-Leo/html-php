<?php
require_once "../cfg/config.php";
if(isset($_FILES['img']) && !empty($_FILES['img']['name'])){
    $destination="img/".$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../".$destination);

    // $img2 = "img/".$_FILES['img2']['name'];
    // move_uploaded_file($_FILE['img2']['tmp_name'],"../".$img2);

    $sql = "INSERT INTO project(h1,img,text) VALUES(:h1,:img,:text)";
    $dataBinded=array(
        ':h1'   => $_POST['h1'],
        ':text'   => $_POST['text'],
        ':img' => $destination,
    );
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
}else{
    echo "no file";exit();
}
header('Location:../project.php');
?>
