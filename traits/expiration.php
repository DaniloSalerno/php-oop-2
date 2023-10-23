<?php

trait Expiration
{
    public function setExpiration($_expiration)
    {
        $this->expiration = $_expiration;
    }

    public function getExpiration()
    {
        return $this->expiration;
    }
}
