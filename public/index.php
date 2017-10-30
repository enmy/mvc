<?php

// Todas las rutas son relativas a la raiz del sitio
chdir(dirname(__DIR__));

define('APP_PATH', 'app/');

require_once 'vendor/autoload.php';
require_once APP_PATH.'http/routes.php';

$app = new Framework\App;