<?php


class Cup
{
    private $name = null;
    private $stat = null;

    public function __construct($name)
    {
        $this->name = $name;
        $this->stat = "empty";
    }

    public function getStat(){
        return $this->stat;
    }

    public function setStat(){
        return $this->stat = "full";
    }

    public function resetStat(){
        return $this->stat = "empty";
    }

}