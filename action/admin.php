<?php 
require_once "cfg/config.php";

//je peux vérifier si l'utilisateur admin est connecté ou non
if(isset($_SESSION['user']) AND $_SESSION['user']['admin']==1){
    echo "Bonjour, administrateur ".$_SESSION['user']['login'];

}

require "project.php";
foreach ($project as $project);
<div>
<h2><?php echo $project['id'] ?></h2>
<form method="post" action="action/delate_project.php"
</div>



?>