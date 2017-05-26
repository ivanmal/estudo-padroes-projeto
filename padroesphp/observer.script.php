<?php
use padroesphp\comportamentais\observer\Bombeiro;

use padroesphp\comportamentais\observer\Predio;

require 'autoload.php';

$predio = new Predio();
$predio->addObserver(new Bombeiro());

$temperatura = (int) $_GET['t'];

$predio->setTemperatura($temperatura);
