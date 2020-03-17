<?php

$database = require 'core/bootstrap.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

$route = Router::load('routes.php');

$route->direct($uri);


