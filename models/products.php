<?php

class Products
{
    public $price;
    public $name;
    public $categories;
    public $types = ['Cibo', 'Gioco', 'Cuccia', 'Altro'];
    public $image;
    public $type;

    function __construct($_name, $_price, Categories $Categories, $_type, $_image)
    {
        $this->setName($_name);
        $this->setPrice($_price);
        $this->categories = $Categories;
        $this->type = $this->types[$_type];
        $this->setImage($_image);
    }

    //setters
    function setName($_name)
    {
        $this->name = $_name;
    }

    function setPrice($_price)
    {
        $this->price = $_price;
    }

    function setImage($_image)
    {
        $this->image = $_image;
    }

    //getters
    function getName()
    {
        return $this->name;
    }

    function getPrice()
    {
        return $this->price;
    }

    function getImage()
    {
        return $this->image;
    }
};





/* var_dump($cat_products);
var_dump($dog_products); */
