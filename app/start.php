<?php

ini_set('display_errors', 'on');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost/projects/herodate');

$db = new PDO('mysql:host=localhost;dbname=hero_date', 'root', '');

require '/functions.php';