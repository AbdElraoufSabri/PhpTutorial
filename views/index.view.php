<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="../style/main.css"/>
    <meta charset="utf-8">
    <title>Welcome to PHP world</title>

</head>
<body>

<?php require('partials/nav.php'); ?>
<ul>
    <?php foreach ($tasks as $task) : ?>
        <?php if ($task->completed) : ?>
            <li><strike><?= $task->description ?></strike></li>
        <?php else: ?>
            <li><?= $task->description ?></li>
        <?php endif; ?>
    <?php endforeach; ?>

</ul>
</body>
</html>
