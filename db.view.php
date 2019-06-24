<!DOCTYPE html>

<html>

<header>
 
    <h1>Arrays in php</h1>

</header>

<body>

<ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if($task->completed) : ?>
                    <strike><?= $task->description;?></strike>

                <?php else: ?>
                    <?= $task->description;?>

                <?php endif ?>
            </li>

        <?php endforeach; ?>

            

    </ul>


</body>
</html>