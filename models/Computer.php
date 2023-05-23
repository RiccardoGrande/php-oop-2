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

    public function get_sistema()
    {
        return $this->sistema;
    }

    public function get_batteria()
    {
        return $this->batteria;
    }

    public function get_rete()
    {
        return $this->rete;
    }

}

$computer = new Computer();
$sistema = new Computer();
$batteria = new Computer();
$rete = new Computer();
$computer->set_computer('computer');
$sistema->set_sistema('sistema');
$batteria->set_batteria('batteria');
$rete->get_rete('rete');

echo $computer->set_computer();
echo "<br>";
echo $sistema->set_sistema();
echo "<br>";
echo $batteria->set_batteria();
echo "<br>";
echo $rete->get_rete();
