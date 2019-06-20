<!DOCTYPE html>

<html>
<body>

<?php

class Employee {

    function assignSal(){
        $this->salary = 30000;

        echo "Salary: ", $this->salary, "<br>";
    }
}


$E1 = new Employee();

$E1->assignSal();
//echo $E1->salary

//using null

$E1->salary = null;
echo "Salary: ", $E1->salary, "<br>";

?>





</html>
</body>