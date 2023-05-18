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

$sistema = new Computer();
$batteria = new Computer();
$rete = new Computer();
$sistema->set_sistema('sistema');
$batteria->set_batteria('batteria');
$rete->get_rete('rete');

echo $sistema->set_sistema();
echo "<br>";
echo $batteria->set_batteria();
echo "<br>";
echo $rete->get_rete();

class Desktop extends Computer
{
    public $scheda_grafica;

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

class Portatile extends Computer
{
    public $hardware;

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

/* $computer=[

new Computer=('computer');
new Desktop=('desktop');
new Portatile=('portatile')
] */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$computer->get_sistema();?></h5>
    <p class="card-text">
        <?=$computer->get_batteria();?>
        <?=$computer->get_hardware();?>
        <?=$computer->get_scheda();?>

    </p>

  </div>
</div>

</body>
</html>
