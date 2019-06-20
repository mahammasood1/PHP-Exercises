<!DOCTYPE html>
<html>
<body>


<?php

$x = 500;   //global variable
$z = 10;

function myFunc(){

    $y = 100;   //local variable

    echo "x = " .$x ."<br>";

    echo "y = ".$y."<br><br>";  
}

myFunc();      //error on x, prints y = 100

echo "x = ".$x."<br>";       //prints 500
echo "y = ".$y."<br><br>";       //error


//using GLOBALS
function anotherFunc()
{
    $GLOBALS['x'] = $GLOBALS['z'];
}

anotherFunc();

echo "x changed from 500 to ". $x."<br><br>" ;


//using static keyword

function testStatic()
{
    static $x = 100;

    echo "x = ".$x."<br>";

    $x--;
}

testStatic();
testStatic();
testStatic();

//using vardump()
echo"<br>Using vardump(): ";
var_dump($x);
echo "<br><br>";

//using array

$num = array(2,3,4);
var_dump($num);

?>



</body>
</html>