<?php


class Man
{
    private $status = null;
    private $name = null;
    private $biom = null;
    private $location = null;
    private $loot = null;
    private $decot = null;

    /**
     * @var $biom Biom
     * @var $decot Decot
     */

    public function __construct($name,$biom,$decot)
    {
        $this->name = $name;
        $this->biom = $biom;
        $this->respawn();
        //$this->location = $this->biom->getLocation();
        $this->loot = [];
        $this->decot = $decot;
        $this->status = 101;
        $this->decot->messege($this->status);
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