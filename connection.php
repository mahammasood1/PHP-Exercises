<?php

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