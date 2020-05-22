<?php


class CoffeeMachine
{
    private $water = null;
    private $coffee = null;
    private $cup = null;
    private $name = null;

    private function __construct($name)
    {
        $this->name = $name;
        $this->coffee = 0;
        $this->cup = 0;
        $this->water = 0;
    }

    private function setCoffee(){
        return $this->coffee = 1;
    }
    private function setCup(){
        return $this->cup = 1;
    }private function setWater(){
        return $this->water = 1;
    }

    private function getCoffee(){
        return $this->coffee;
    }
    private function getCup(){
        return $this->cup;
    }private function getWater(){
        return $this->water;
    }

    public function buildCoffee(){
        if($this->coffee == 1 && $this->water == 1 && $this->cup == 1){
            $this->cup = 0;
            $this->water = 0;
            $this->coffee = 0;

        }
    }
}