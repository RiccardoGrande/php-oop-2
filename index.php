<?php

class Computer
{
    public $sistema;
    public $batteria;
    public $rete;
    public function __construct(string $sistema, string $batteria, string $rete)
    {

        $this->sistema = $sistema;
        $this->batteria = $batteria;
        $this->rete = $rete;
    }

}

class Desktop extends Computer
{
    public $scheda_grafica;

    public function __construct(string $scheda_grafica)
    {
        parent::construct($sistema, $batteria, $rete);
        $this->scheda_grafica = $scheda_grafica;
    }

}

class Portatile extends Computer
{
    public $hardware;

    public function __construct(string $hardware)
    {
        parent::construct($sistema, $batteria, $rete);
        $this->hardware = $hardware;
    }

}
