<!DOCTYPE html>
<?php require_once "cfg/config.php"; ?>
<html>

<head>
    <meta charset=UTF-8>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection">
    <link type="text/css" rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php require "component/navbar.php"; ?>
    <div class="center white-text">
        <?php
        if (isset($_SESSION['user']) and $_SESSION['user']['admin'] == 1) {
            require "action/admin.php";
            require "paneladmin.php";
        } else if (isset($_SESSION['user'])) {
            require "queries/users.php";
        }
        ?>
    <?php require "component/menu.php"; ?>
    </div>
    <?php require "queries/one_project.php"; 
    //foreach($projectList as $project); ?>
    <h1><?php echo $project['h1'] ?></h1>
    <img src="<?php echo $project['img'] ?>" alt="">
    <p><?php echo $project['text'] ?></p>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>

</html>