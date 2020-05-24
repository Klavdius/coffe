<?php

require_once 'Biom.php';

class Location
{
    private $location = null;
    private $code = null;
    private $items= null;
    /**
     * @var $biom Biom
     */
    private $biom = null;

    public function __construct($location,$biom)
    {
        $this->location = $location;
        $this->biom = $biom;
        $this->code = $this->setBiom();
        $this->items = [];
    }

    private function setBiom(){
        return $this->biom->addLocation($this->location);


    }

    public function getLocation(){
        return $this->location;
    }

    public function addItem($item){
        $this->items[count($this->items)] = $item;

    }

    public function getItems(){
        return $this->items;
    }
}