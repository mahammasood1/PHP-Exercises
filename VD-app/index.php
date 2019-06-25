<!-- entry point -->

<?php

require 'vendor/autoload.php';

require 'core/bootstrap.php';

// $router = new Router();


// require 'routes.php';

//$uri = $_SERVER['REQUEST_URI'];
// //$uri = trim($_SERVER['REQUEST_URI'], '/');

//  //echo $uri; die;

// //var_dump($_SERVER);

// require $router->direct($uri);

require Router::load('routes.php')
        
        ->direct(Request::uri(), Request::method());    //determining controller, direct traffic
