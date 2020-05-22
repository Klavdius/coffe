<?php


class Decot
{
    private $name = null;
    private $key = null;
    private $messege = null;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function messege($fullMessege){
        $this->key = substr($fullMessege,0,2);
        $this->messege = substr($fullMessege,2,1);

        /**echo $this->key . PHP_EOL;
        echo '1!!!3' . PHP_EOL;
        echo $this->messege . PHP_EOL;
        **/
    }
}