<?php

use App\Controllers\Like;
use App\Controllers\Post;

require 'vendor/autoload.php';

// Initialize router and start application
$router = new App\Router();

use App\Router;
use App\Controllers\{User,Likes,Posts, Auth};

$controllers = [
    User::class,
    Posts::class,
    Likes::class,
    Auth::class,
];

$router = new Router();
$router->registerControllers($controllers);
$router->run();
// I can't lie I just don't understand anything about php