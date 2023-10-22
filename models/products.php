<?php

class Products
{
    protected $price;
    protected $name;
    protected $categories;
    protected $image;

    function __construct($_name, $_price, $_image, Categories $Categories)
    {
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setImage($_image);
        $this->setCategories($Categories);
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

    function setCategories($Categories)
    {
        $this->categories = $Categories;
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

    function getCategories()
    {
        return $this->categories;
    }
};





/* var_dump($cat_products);
var_dump($dog_products); */
