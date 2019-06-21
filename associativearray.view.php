<!DOCTYPE html>

<html>

<header>
 
    <h1>Arrays in php</h1>

</header>

<body>

    <ul>
            <?php foreach($task as $component=>$val): ?>
                <li><strong><?=$component?></strong><?=$val?></li>
            <?php endforeach; ?>

    </ul>


</body>
</html>