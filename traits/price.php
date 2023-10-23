<?php

trait Price
{
    function setPrice($_price)
    {
        //è corretto???
        try {

            if (is_numeric($_price)) {

                if ($_price < 0.1) {

                    throw new RangeException('The value of price is too low,inser a value superior of 0.1');
                } else if ($_price > 999) {

                    throw new RangeException('The value of price is too hight,inser a value inferior of 999');
                } else {

                    $this->price = $_price;
                }
            } else {

                throw new InvalidArgumentException('The value of price is not valid,insert a number value');
            }
        } catch (Exception $error) {
            echo 'ERROR : ' . $error->getMessage();
            echo '<br>';
            echo $error->getTraceAsString();
        }
    }

    function getPrice()
    {
        return $this->price;
    }
}
