<?php

require_once 'Biom.php';

class Location
{
    private $location = null;
    private $code = null;

    /**
     * @var $biom Biom
     */
    private $biom = null;

    public function __construct($location,$biom)
    {
        $this->location = $location;
        $this->biom = $biom;
        $this->code = $this->setBiom();
    }

    private function setBiom(){
        return $this->biom->addLocation($this->location);


    }

    public function getLocation(){
        return $this->location;
    }
}