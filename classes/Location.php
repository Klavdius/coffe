<?php

require_once 'Biom.php';

class Location
{
    private $location = null;
    private $code = null;
    private $item= null;
    /**
     * @var $biom Biom
     */
    private $biom = null;

    public function __construct($location,$biom)
    {
        $this->location = $location;
        $this->biom = $biom;
        $this->code = $this->setBiom();
        $this->item = [];
    }

    private function setBiom(){
        return $this->biom->addLocation($this->location);


    }

    public function getLocation(){
        return $this->location;
    }

    public function addItem($item){
      //  $this->item[count($this->item)] = $item;

    }
}