<?php

class Toy extends Products
{
    public $type = 'Giocattolo';
    protected $color;
    protected $weight;

    public function __construct(string $_name, float $_price, string $_image,  Categories $Categories, string $_color, float $_weight)
    {
        parent::__construct($_name, $_price, $_image, $Categories);
        $this->setWeight($_weight);
        $this->setColor($_color);
    }



    //setters
    public function setColor($_color)
    {
        $this->color = $_color;
    }

    public function setWeight($_weight)
    {
        $this->weight = $_weight;
    }



    //getters
    public function getColor()
    {
        return $this->color;
    }

    public function getWeight()
    {
        return $this->weight;
    }
}
