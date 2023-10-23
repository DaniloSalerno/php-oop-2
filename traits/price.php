<?php

trait Price
{
    function setPrice($_price)
    {
        $this->price = $_price;
    }

    function getPrice()
    {
        return $this->price;
    }
}
