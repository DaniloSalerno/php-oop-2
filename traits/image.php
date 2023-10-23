<?php

trait Image
{

    function setImage($_image)
    {
        $this->image = $_image;
    }

    function getImage()
    {
        return $this->image;
    }
}
