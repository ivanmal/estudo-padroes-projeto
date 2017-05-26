<?php
use padroesphp\estruturais\decorator\Passaro;

use padroesphp\estruturais\decorator\Cavalo;

use padroesphp\estruturais\decorator\Pegaso;

require 'autoload.php';

use padroesphp\estruturais\decorator;

$pegaso = new Pegaso();

$pegaso->addDecorator(new Cavalo());
$pegaso->addDecorator(new Passaro());

$pegaso->voar();
$pegaso->trotar();