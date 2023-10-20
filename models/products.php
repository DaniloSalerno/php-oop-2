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

    function getIcon()
    {
        if (strtolower($this->categories->animal) == 'cane') {
            return '<img width="30" src="./img/icon-dog.jpg" alt="Icona di un cane">';
        } elseif (strtolower($this->categories->animal) == 'gatto') {
            return '<img width="30" src="./img/icon-cat.jpg" alt="Icona di un Gatto">';
        } {
        }
    }
};



$products = [
    new Products('Croccantini', 9.99, $dog_categories, 0, 'https://picsum.photos/200/300?random=1'),

    new Products('Bocconi con Manzo', 19.99, $dog_categories, 0, 'https://picsum.photos/200/300?random=2'),

    new Products('Collare', 10.99, $dog_categories, 3, 'https://picsum.photos/200/300?random=3'),

    new Products('Tiragraffi', 19.99, $cat_categories, 1, 'https://picsum.photos/200/300?random=4'),
    new Products('Cuccia', 49.99, $dog_categories, 2, 'https://picsum.photos/200/300?random=5'),
    new Products('Pesce in scatola', 9.99, $cat_categories, 0, 'https://picsum.photos/200/300?random=6'),
    new Products('Osso giocattolo', 15.99, $dog_categories, 1, 'https://picsum.photos/200/300?random=7')
];




/* var_dump($cat_products);
var_dump($dog_products); */
