<!DOCTYPE html>

<html>



<head>

<style>

h1{
    text-align: center;}

</style>

</head>

<body>

<h1>
        <?php

            //getting value from URL using superglobal
            echo "Hello, " .$_GET["name"]."<br>";
        ?>

        
         <?= "Hello, " .htmlspecialchars($_GET["name"])."<br>";  //for security in case of wrong input?> 

       
        <?= $note;  //separating code from presentation ?>        
</h1>




</body>
</html>