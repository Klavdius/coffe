<?php


class Cup
{
    private $name = null;
    private $stat = null;

    private function __construct($name)
    {
        $this->name = $name;
        $this->stat = "empty";
    }

    private function getStat(){
        return $this->stat;
    }

    private function setStat(){
        $this->stat = "full";
    }

    private function resetStat(){
        $this->stat = "empty";
    }

}