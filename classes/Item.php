<?php

require_once 'Biom.php';

class Item
{
    private $name = null;
    private $code = null;
    private $biom = null;
    /**
     * @var $biom Biom;
     *
     */

    public function __construct($name,$biom)
    {
        $this->name = $name;
        $this->biom = $biom;
        $this->code = $biom->addItem($this->name);

    }

    public function getName(){
        return $this->name;
    }
}