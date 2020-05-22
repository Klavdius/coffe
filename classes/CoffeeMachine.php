<?php


class CoffeeMachine
{
    private $water = null;
    private $coffee = null;
    private $cup = null;
    private $name = null;



    /**
     * @var $object Cup;
     */
    private $object = null;

    public function __construct($name)
    {
        $this->name = $name;
        $this->coffee = 0;
        $this->cup = 0;
        $this->water = 0;
    }

    public function setCoffee(){
        return $this->coffee = 1;
    }
    public function setCup(){
        return $this->cup = 1;
    }public function setWater(){
        return $this->water = 1;
    }

    public function getCoffee(){
        return $this->coffee;
    }
    public function getCup(){
        return $this->cup;
    }
    public function getWater(){
        return $this->water;
    }

    public function buildCoffee($cup){
        if($this->coffee == 1 && $this->water == 1 && $this->cup == 1){
            $this->cup = 0;
            $this->water = 0;
            $this->coffee = 0;
        $this->object = $cup;
        return $this->object->setStat();
        }
    }
}