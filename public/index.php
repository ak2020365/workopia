<?php
require '../helpers.php';

$route = [
    '/' => 'controllers/home.php',
    '/listing' => 'controllers/listings/index.php',
    '/listings/create' => 'controllers/listings/create.php',
    '404' => 'controllers/error/404.php'
];