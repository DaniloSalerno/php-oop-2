<?php

trait Price
{
    function setPrice($_price)
    {
        if (is_numeric($_price)) {

            if ($_price < 0.1) {

                throw new Exception('The value of price is too low,inser a value superior of 0.1');
            } else if ($_price > 999) {

                throw new Exception('The value of price is too hight,inser a value inferior of 999');
            } else {

                $this->price = $_price;
            }
        } else {

            throw new Exception('The value of price is not valid,insert a number value');
        }
    }

    function getPrice()
    {
        return $this->price;
    }
}
