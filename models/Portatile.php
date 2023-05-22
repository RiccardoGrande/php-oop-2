<?php

class Portatile extends Computer
{
    public $hardware;
    public $sistema;
    public $batteria;
    public $rete;

    public function __construct(string $sistema, string $batteria, string $rete, string $hardware)
    {
        parent::construct($sistema, $batteria, $rete);
        $this->hardware = $hardware;
    }

    public function get_hardware()
    {
        return $this->hardware;
    }

}

$hardware = new Portatile();

$hardware->get_hardware('hardware');

echo $hardware->get_hardware();
