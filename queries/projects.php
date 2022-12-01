<?php
$sql = "SELECT * FROM project";
$pre = $pdo->prepare($sql);
$pre->execute();
$projectList = $pre->fetchAll(PDO::FETCH_ASSOC);?>



