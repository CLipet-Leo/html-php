<?php 
$sql = "SELECT * FROM project WHERE id=:id";
$dataBinded=array(
    ":id"=>$_GET['id']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$project = $pre->fetch(PDO::FETCH_ASSOC);
?>