<?php

class Computer
{
    public $sistema;
    public $batteria;
    public $rete;
    public $sconto = 0;
    public function setSconto($eta)
    {
        if ($eta > 65) {
            $this->sconto = 40;
        }
    }
    public function getSconto()
    {
        return $this->sconto;
    }

}

class Desktop extends Computer
{
    public $scheda_grafica;
    public function setLivello($scheda_grafica)
    {
        $this->scheda_grafica = $scheda_grafica;
    }
    public function setSconto($eta)
    {
        if ($eta > 65) {
            $this->sconto = 50;
        } else {
            $this->sconto = $this->livello * 10;
        }
    }

}

class Portatile extends Computer
{
    public $hardware;
    public function setLivello($hardware)
    {
        $this->hardware = $hardware;
    }
    public function setSconto($eta)
    {
        if ($eta > 65) {
            $this->sconto = 50;
        } else {
            $this->sconto = $this->livello * 10;
        }
    }
}
