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
        $this->name = $_name;
        $this->price = $_price;
        $this->categories = $Categories;
        $this->type = $this->types[$_type];
        $this->image = $_image;
    }
};





/* var_dump($cat_products);
var_dump($dog_products); */
