<?php
class Food extends Products
{
    use Weight;
    use Expiration;
    public $type = 'Cibo';
    protected $expiration;
    protected $weight;

    public function __construct(string $_name, float $_price, string $_image,  Categories $Categories, string $_expiration, float $_weight)
    {
        parent::__construct($_name, $_price, $_image, $Categories);
        $this->setExpiration($_expiration);
        $this->setWeight($_weight);
    }
}
