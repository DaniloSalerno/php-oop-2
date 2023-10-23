<?php
trait Name
{
    function setName($_name)
    {
        $this->name = $_name;
    }

    function getName()
    {
        return $this->name;
    }
}
