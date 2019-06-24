<?php

function checkAge($age)
{
    if($age < 21)
        echo 'Not old enough', "<br>";
    
    else
        echo 'Old enough', "<br>"; 
    

}

function connectToDb()
{
try{
 return new pdo('mysql:host=127.0.0.1;dbname=mytodo','root', '');
}

catch(PDOexception $e)
{
    die($e->getMessage());
}

}

function fetchAllTasks($pdo)
{
    $stmt = $pdo->prepare('select * from todos');

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS, 'Task');
//var_dump($results[0]->description);

//var_dump($tasks[0]->foobar());

}


