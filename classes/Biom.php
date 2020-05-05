<?php

require_once 'Location.php';

class Biom
{
    private $location = [];
    private $code = 0;

    public function addLocation($location){
        $this->location[$this->code] = $location;
        return $this->code++;
    }

    /**
     * @return null
     */
    public function getLocation()
    {
        return $this->location;
    }

}