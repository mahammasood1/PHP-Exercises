<!DOCTYPE html>

<html>

<header>
 
    <h1>Arrays in php</h1>

</header>

<body>

    <?php       
        
        foreach ($animals as $animal)
            echo $animal;
    
    
    ?>

    <!--using another syntax better for html styling of list-->
    <ul>
        <?php foreach ($animals as $animal): ?>
            <li> <?= $animal?> </li>

        <?php endforeach; ?>
    </ul>



</body>
</html>