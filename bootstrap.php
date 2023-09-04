<?php

use Core\App;
use Core\Database;
use Core\Container;

$container = new Container();

$container->bind(Database::class ,function (){
    $config = require base_path('config.php');
    return new Database($config['mysql']);
});

$db = $container->resolve(Database::class);



App::setContainer($container);