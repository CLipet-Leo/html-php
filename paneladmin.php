<!DOCTYPE html>
<?php require_once "cfg/config.php"; ?>

<body>
    <div><?php echo $projet['projet'] ?>
        <form method="post" action="action/projet.php">
            <input type="hidden" name="id" value="<?php echo $projet['id'] ?>">
            <textarea name="project" rows="8" cols="80"><?php echo $projet['projet'] ?></textarea>
            <button type="submit">Suprimer</button>
        </form>
    </div>
    <?php //foreach end; 
    ?>
    <h2> Liste users</h2>
    <?php require "queries/users.php";
    foreach ($userList as $user); ?>

    <div>
        <h2><?php echo $user['username'] ?></h2>
        <form method="post" action="action/delate_project.php">
            <input type="hidden" name="id" value="<?php echo $projet['id'] ?>">
            <textarea name="project" rows="8" cols="80"><?php echo $projet['username'] ?></textarea>
            <button type="submit">Suprimer le projet </button>
        </form>
    </div>

    <h2> Liste users </h2>
    <?php
    require "queries/users.php";
    foreach ($userList as $user); ?>
    <div>
        <h2><?php echo $user['username'] ?></h2>
        <form method="post" action="action/update_user.php">
            <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
            <textarea name="username" rows="8" cols="80"><?php echo $user['username'] ?></textarea>
            <button type="submit">Modifier users</button>
        </form>
    </div>44AdminListe users22
    <h2><?php echo $user['username'] ?></h2>
    <form method="post" action="action/update_user.php">
        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
        <textarea name="username" rows="8" cols="80"><?php echo $user['username'] ?></textarea>
        <button type="submit">Modifier</button>
    </form>44admiAdmin : n==1?""Oui:""Nondelate<html>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>