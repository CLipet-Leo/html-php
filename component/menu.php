<?php require_once "queries/projects.php"; ?>
<nav>
    <ul>
        <?php if(isset($_SESSION['user'])){ ?>
        <?php } ?>
        <?php foreach($projectList as $project); ?>
            <li><a href="project.php?id=<?php echo $project['id'] ?>"><?php echo $project['h1'] ?></a></li>
    </ul>
</nav>

