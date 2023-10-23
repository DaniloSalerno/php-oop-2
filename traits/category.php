<?php

trait Category
{

    function setCategories($Categories)
    {
        $this->categories = $Categories;
    }

    function getCategories()
    {
        return $this->categories;
    }
}
