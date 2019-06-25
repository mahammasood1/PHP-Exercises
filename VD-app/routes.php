<?php



// $router->define([

//     'scripts/router' => 'controllers/index.php',
//     'scripts/router/tasks' => 'controllers/task.php',
//     'scripts/router/about' => 'controllers/about.php',
//     'scripts/router/about/culture' => 'controllers/about-culture.php',
//     'scripts/router/contact' => 'controllers/contact.php',
//     'scripts/router/names' => 'controllers/add-name.php'
//     ]);


$router->get('scripts/router', 'controllers/index.php');

$router->get('scripts/router/about', 'controllers/about.php');

$router->get('scripts/router/about/culture', 'controllers/about-culture.php');

$router->get('scripts/router/contact', 'controllers/contact.php');

$router->post('scripts/router/names', 'controllers/add-name.php');

//var_dump($router->routes);
