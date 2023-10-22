<?php

class Food extends Products
{
    public $type = 'Cibo';
    protected $expiration;
    protected $weight;

    public function __construct(string $_name, float $_price, string $_image,  Categories $Categories, string $_expiration, float $_weight)
    {
        parent::__construct($_name, $_price, $_image, $Categories);
        $this->setExpiration($_expiration);
        $this->setWeight($_weight);
    }



    //setters
    public function setExpiration($_expiration)
    {
        $this->expiration = $_expiration;
    }

    public function setWeight($_weight)
    {
        $this->weight = $_weight;
    }



    //getters
    public function getExpiration()
    {
        return $this->expiration;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}
