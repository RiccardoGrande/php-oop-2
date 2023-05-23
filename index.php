<?php
require_once __DIR__ . '/models/Computer.php';
require_once __DIR__ . '/models/Desktop.php';
require_once __DIR__ . '/models/Portatile.php';

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
    <h5 class="card-title"><?=$computer->set_computer();?></h5>
    <p class="card-text">
        <?=$computer->get_sistema();?>
        <?=$computer->get_hardware();?>
        <?=$computer->get_scheda();?>
        <?=$computer->get_batteria();?>

    </p>

  </div>
</div>

</body>
</html>
