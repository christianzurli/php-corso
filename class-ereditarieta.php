<?php

class Auto
{
    public $type;
    private $color = 'Yellow';

    public function __construct($insideColor = null, $outsideColor = null)
    {
        $this->color = $insideColor;
        $this->type = $outsideColor;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor(string $strColor = null)
    {
        if (is_string($strColor)) {
            $this->color = $strColor;
            return $this->color;
        } else {
            return null;
        }
    }
}

//$auto = new Auto();
//$auto->setColor('Red');
//echo $auto->getColor();

// in PHP si può estendere una sola classe

class Truck extends Auto
{
    public function __construct($insideColor = null, $outsideColor = null)
    {
        parent::__construct($insideColor, $outsideColor);
        parent::setColor('Yellow');
    }

    public function getColor()
    {
        return strtoupper(parent::getColor());
    }
}

$newTruck = new Truck();
$newTruck->setColor('Brown');
echo $newTruck->getColor();