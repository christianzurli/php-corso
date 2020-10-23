<?php
class Auto {
    private $color = '';
    public $type;

    public function __construct($insideColor = null, $outsideColor = null )
    {
        $this->color = $insideColor;
        $this->type = $outsideColor;
    }
    public function getColor() {
        return $this->color;
    }
    public function setColor(string $strColor) {
        if (is_string($strColor)) {
            $this->color = $strColor;
            return $this->color;
        } else {
            return null;
        }
    }
}

$auto = new Auto();
$auto->setColor('Red');
echo $auto->getColor();