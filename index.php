<?php

define('SCRIPT_ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);
define('BASE_CLASS_PATH', SCRIPT_ROOT . DS . 'classes');

require_once BASE_CLASS_PATH . DS . 'Biom.php';
require_once BASE_CLASS_PATH . DS . 'Location.php';
require_once BASE_CLASS_PATH . DS . 'Item.php';

$house = new Biom('house');
$room = new Location('room',$house);
$kitchen = new Location('kitchen',$house);

$coffeeMachine = new Item('Coffee Machine',$house);
$cup = new Item('Cup', $house);
$electricity = new Item('Electricity',$house);
$coffee = new Item('coffee',$house);
$water = new Item('Water',$house);
$cream = new Item('Cream',$house);



