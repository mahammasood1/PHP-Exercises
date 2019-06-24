<?php

require 'functions.php';
require 'class.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);

require 'db.view.php';

