<?php

define('SCRIPT_ROOT', __DIR__);
define('DS', DIRECTORY_SEPARATOR);
define('BASE_CLASS_PATH', SCRIPT_ROOT . DS . 'classes');

require_once BASE_CLASS_PATH . DS . 'Biom.php';
require_once BASE_CLASS_PATH . DS . 'Location.php';
require_once BASE_CLASS_PATH . DS . 'Item.php';
require_once BASE_CLASS_PATH . DS . 'Cup.php';
require_once BASE_CLASS_PATH . DS . 'CoffeeMachine.php';
require_once BASE_CLASS_PATH . DS . 'Man.php';


$house = new Biom('house');
$room = new Location('room',$house);
$kitchen = new Location('kitchen',$house);


$Bob = new Man('Bob', $house);

$cup = new Cup("Favorite");
$coffeeMachine = new CoffeeMachine ("Philips");


$coffee = new Item('coffee',$house);
$water = new Item('Water',$house);


$kitchen->addItem($cup);
$kitchen->addItem($coffee);
$kitchen->addItem($water);

$kitchen->addItem($coffeeMachine);

$Bob->goKitchen();


