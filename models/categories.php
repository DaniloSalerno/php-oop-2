<?php

class Categories
{
    public $animal;

    function __construct($_animal)
    {
        $this->animal = $_animal;
    }

    function getIcon()
    {
        if (strtolower($this->animal) == 'cane') {
            return '<img width="30" src="./img/icon-dog.jpg" alt="Icona di un cane">';
        } elseif (strtolower($this->animal) == 'gatto') {
            return '<img width="30" src="./img/icon-cat.jpg" alt="Icona di un Gatto">';
        } {
        }
    }
}

$dog_categories = new Categories('cane');
$cat_categories = new Categories('gatto');
