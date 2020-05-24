<?php


class Man
{
    /**
     * @var $biom Biom
     * @var $location Location
     */

    private $status = null;
    private $name = null;
    private $biom = null;
    private $location = null;
    private $loot = null;




    public function __construct($name,$biom)
    {
        $this->name = $name;
        $this->biom = $biom;
        $this->respawn();
        //$this->location = $this->biom->getLocation();
        $this->loot = [];
        $this->status = 101;

    }

    public function respawn(){
        $this->location = $this->biom->getLocation(0);
        echo "$this->name in $this->location" . PHP_EOL;
    }
    public function goKitchen(){
        for ($index = 0; $this->location !== "kitchen"; $index++){  //bad
            $this->location = $this->biom->getLocation($index);
        }
            echo "$this->name going to $this->location" . PHP_EOL;
    $this->buildCoffee();
    }

    public function buildCoffee(){
        
    }


}