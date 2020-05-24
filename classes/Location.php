<?php

require_once 'Biom.php';

class Location
{
    private $nameLocation = null;
    //private $code = null;
    private $items= null;
    /**
     * @var $biom Biom
     */
    private $biom = null;

    public function __construct($location,$biom)
    {
        $this->nameLocation = $location;
        $this->biom = $biom;
        $this->setBiom();
        $this->items = [];
    }

    private function setBiom(){
        return $this->biom->addLocation($this);


    }


    public function getNameLocation(){
        return $this->nameLocation;
    }

    public function addItem($item){
        $this->items[count($this->items)] = $item;

    }

    public function getItems(){
        return $this->items;
    }
}