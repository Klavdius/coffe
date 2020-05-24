<?php


class Man
{
    /**
     * @var $biom Biom
     *
     */
    private $biom = null;
    private $name = null;

    /**
     * @var $location Location
     */
    private $location = null;
    private $loot = null;


    public function __construct($name, $biom)
    {
        $this->name = $name;
        $this->biom = $biom;
        $this->respawn();
        $this->loot = [];

    }

    public function respawn()
    {
        $this->location = $this->biom->getLocation(0);

    }

    public function goKitchen()
    {
        foreach ($this->biom->getLocations() as $location) {
            if ($location->getNameLocation() == "kitchen") {
                $this->location = $location;
                break;
            }
        }


        $this->buildCoffee();
    }

    public function buildCoffee()
    {
        /**
         * @var $coffeemach CoffeeMachine
         */
        $coffeemach = null;
        $cupCoffee = null;
        foreach ($this->location->getItems() as $value){
            if ($value instanceof CoffeeMachine){
                $coffeemach = $value;
                break;
            }
        }
        if (!$coffeemach->getCoffee()){
        $coffeemach->setCoffee(1);
        }if (!$coffeemach->getWater()){
        $coffeemach->setWater(1);
        }

        foreach ($this->location->getItems() as $value){
            if ($value instanceof Cup){
                $cupCoffee = $value;
                break;
            }else{
                break;
            }
        }

        if ($coffeemach->getCoffee() && $coffeemach->getWater()){
            $coffeemach->buildCoffee($cupCoffee);

        }
        echo $cupCoffee->getStat();
    }


}