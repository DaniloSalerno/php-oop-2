<?php
class Products
{
    use Name;
    use Price;
    use Image;
    use Category;
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
};
