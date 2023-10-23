<?php
class Toy extends Products
{
    use Color;
    use Weight;
    public $type = 'Giocattolo';
    protected $color;
    protected $weight;

    public function __construct(string $_name, float $_price, string $_image,  Categories $Categories, string $_color, float $_weight)
    {
        parent::__construct($_name, $_price, $_image, $Categories);
        $this->setWeight($_weight);
        $this->setColor($_color);
    }
}
