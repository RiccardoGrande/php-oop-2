<?php

class Desktop extends Computer
{
    public $scheda_grafica;
    public $sistema;
    public $batteria;
    public $rete;

    public function __construct(string $sistema, string $batteria, string $rete, string $scheda_grafica)
    {
        parent::construct($sistema, $batteria, $rete);
        $this->scheda_grafica = $scheda_grafica;
    }

    public function get_scheda()
    {
        return $this->scheda_grafica;
    }

}

$scheda_grafica = new Desktop();

$scheda_grafica->get_scheda('scheda grafica');

echo $scheda_grafica->get_scheda();
