<?php

interface iCar {
    public function stop();
    public function start();
    public function changeGear(int $v);
    public function park();
    public function accelerate();
}

class Auto implements iCar
{
    public $iStopped = true;
    protected $isParked = true;
    protected $gear = 0;
    const maxGear = 5;
    public function stop() {
        $this->iStopped = true;
    }
    public function start() {
        $this->iStopped = false;
    }
    public function changeGear(int $g) { // se metto int lo devo mettere anche nell'interfaccia
        if ($g > self::maxGear) {
            $g = self::maxGear;
        }
        if ($g < 0) {
            $g = 0;
        }
        $this->gear = $g;
        if ($this->gear > 0) {
            $this->iStopped = false;
            $this->isParked = false;
        }
    }
    public function park() {
        $this->iStopped = true;
        $this->isParked = true;
    }
    public function accelerate() {}
}

$auto = new Auto();
$auto->start();
$auto->changeGear(1);
var_dump($auto);