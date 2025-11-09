<?php
require '../helpers.php';


$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

require base_path('route.php');
