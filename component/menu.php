<?php require "queries/projects.php"; ?>
<nav>
    <ul>
           <?php foreach($projectList as $project){ ?>
            <li><a href="project.php?id=<?php echo $project['id'] ?>"><?php echo $project['h1'] ?></a></li>
            <?php } ?>
    </ul>
</nav>
