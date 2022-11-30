<!DOCTYPE html>
<?php require_once "cfg/config.php"; ?>

<h1>Liste des utilisateurs</h1>
<?php
$sql = "SELECT * FROM user";
$pre = $pdo->prepare($sql);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);

foreach ($data as $user) { ?>
    <div class="bloc_user">
        <h2><?php echo $user['login'] ?></h2>
        <span class="email"><?php echo $user['email'] ?></span>
        <form method="post" action="action/update_user.php">
            <input type="hidden" name="login" value="<?php echo $user['login'] ?>">
            <button type="submit">Modifier utilisateurs</button>
        </form>
    </div>
<?php } ?>

<div>
    <form method="post" action="action/delete_user.php">
        <input type="hidden" name="login" value="<?php $user['login'] ?>">
        <textarea name="login" rows="8" cols="50"></textarea>
        <button type="submit">Supprimer utilisateurs</button>
    </form>
</div>


<div>
    <form method="post" action="action/add_project.php">
        <input type="hidden" name="project" value="<?php echo $projet['id'] ?>">
        <textarea name="project" rows="8" cols="80"></textarea>
        <button type="submit">Ajouter un projet </button>
    </form>
    <form method="post" action="action/del_project.php">
        <input type="hidden" name="project" value="<?php echo $projet['id'] ?>">
        <textarea name="project" rows="8" cols="80"></textarea>
        <button type="submit">Supprimer le projet </button>
    </form>
</div>