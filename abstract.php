<?php

abstract class Motor { // non si può istanziare
    protected $speed = 0;
    abstract protected function speedUp(int $v);
    public function getSpeed() {
        return $this->speed;
    }
}
class myMotor extends Motor {
    protected $speed = 0;
    public function speedUp(int $v) //deve avere la stessa impronta del metodo astratto
    {
        $this->speed += $v;
    }

}

$car = new myMotor();
$car->speedUp(5);
//echo $car->getSpeed();
var_dump($car);

