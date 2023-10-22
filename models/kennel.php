<?php

class Kennel extends Products
{
    public $type = 'Cuccia';
    protected $color;
    protected $weight;
    protected $width;
    protected $height;


    public function __construct(string $_name, float $_price, string $_image,  Categories $Categories, string $_color, float $_weight, float $_width, float $_height)
    {
        parent::__construct($_name, $_price, $_image, $Categories);
        $this->setWeight($_weight);
        $this->setColor($_color);
        $this->setWidth($_width);
        $this->setHeight($_height);
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

    public function setWidth($_width)
    {
        $this->width = $_width;
    }

    public function setHeight($_height)
    {
        $this->height = $_height;
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

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }
}
