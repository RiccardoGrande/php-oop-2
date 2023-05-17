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
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

</body>
</html>
