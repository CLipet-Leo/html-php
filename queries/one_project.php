<?php
$sql = "SELECT * FROM project";
$pre = $pdo->prepare($sql);
$pre->execute();
$project = $pre->fetchAll(PDO::FETCH_ASSOC);
?>