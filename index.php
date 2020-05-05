<?php

define('SCRIPT_ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);
define('BASE_CLASS_PATH', SCRIPT_ROOT . DS . 'classes');

require_once BASE_CLASS_PATH . DS . 'Biom.php';
require_once BASE_CLASS_PATH . DS . 'Location.php';

$room = new Location(room);
$kitchen = new Location(kitchen);

echo Biom::getLocation;