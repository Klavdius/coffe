<?php

require_once 'Biom.php';

class Location
{
    private $location = null;
    private $code = null;

    /**
     * @var $biom Biom
     */

    public function __construct($location)
    {
        $this->location = $location;
        $this->setBiom();
    }

    private function setBiom(){
        $this->code = Biom::addLocation($this->location);
    }

    public function getLocation(){
        return $this->location;
    }
}