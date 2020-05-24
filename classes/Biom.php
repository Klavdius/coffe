<?php

require_once 'Location.php';

class Biom
{
    private $name = null;
    private $locations = null;
    private $code = null;
    private $itemCode = null;
    private $listItem = null;

    public function __construct($name){
        $this->name = $name;
        $this->code = 0;
        $this->itemCode = 0;
        $this->locations = [];
        $this->listItem = [];
    }
    public function addLocation($location){
        $this->locations[$this->code] = $location;
        return $this->code++;
    }

    public function addItem($nameItem){
        $this->listItem[$this->itemCode] = $nameItem;
        return $this->itemCode++;
    }


    public function getLocation($index)
    {
        return $this->locations[$index];
    }

    public function getLocations()
    {
        return $this->locations;
    }

    public function getName(){
        return $this->name;
    }
}