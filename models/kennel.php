<?php
class Kennel extends Products
{
    use Weight;
    use Color;
    use Width;
    use Height;
    public $type = 'Cuccia';
    protected $color;
    protected $weight;
    protected $width;
    protected $height;


    public function __construct(string $_name, float $_price, string $_image,  Categories $Categories, string $_color, float $_weight, float $_width, float $_height)
    {
        parent::__construct($_name, $_price, $_image, $Categories);
        $this->setWeight($_weight);
        $this->setColor($_color);
        $this->setWidth($_width);
        $this->setHeight($_height);
    }
}
