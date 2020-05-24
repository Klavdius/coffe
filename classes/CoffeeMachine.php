<?php


class CoffeeMachine
{
    private $water = null;
    private $coffee = null;
    private $name = null;



    /**
     * @var $object Cup;
     */
    private $object = null;

    public function __construct($name)
    {
        $this->name = $name;
        $this->coffee = 0;
        $this->water = 0;
    }

    public function setCoffee($value){
        return $this->coffee = $value;
    }



    public function setWater($value){
        return $this->water = $value;
    }

    public function getCoffee(){
        return $this->coffee;
    }

    public function getWater(){
        return $this->water;
    }

    public function buildCoffee($cup){
        if($this->coffee && $this->water){
            $this->water = 0;
            $this->coffee = 0;
        $this->object = $cup;
        return $this->object->setStat();
        }
    }
}