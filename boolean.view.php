<!DOCTYPE html>

<html>

<header>
 
    <h1>Arrays in php</h1>

</header>

<body>

    <ul>
           <?= $task['completed'] ? 'Done':'Not done' ?>
            <br>
            
           <?php 
           if ($task['checked'])
                echo 'Completed';

            else
                echo 'Not completed';
            ?>

    </ul>


</body>
</html>
