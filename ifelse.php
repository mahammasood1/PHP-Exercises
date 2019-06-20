<!DOCTYPE>

<html>
<body>

<?php

$date = date("d");

if($date < 16)
    echo "first half of month", "<br>";

else
    echo "second half of month", "<br>";

echo "File name: ", $_SERVER['PHP_SELF'], "<br>";

echo "Request time: ", $_SERVER['REQUEST_TIME']


?>


</body>
</html>
