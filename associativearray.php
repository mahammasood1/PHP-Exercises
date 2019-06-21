<?php

$task = [
    'title' => 'complete notes',
    'due' => 'today',
    'assigned_to' => 'Maham',
    'completed' => 'yes'
];

$task['duration'] = '2h';

echo '<pre>';
var_dump($task);
//die();
echo '</pre>';

echo $task['title'];

unset($task['duration']);

require 'associativearray.view.php';