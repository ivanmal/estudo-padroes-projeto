<?php
require '../../autoload.php';

use padroesphp\criacao\singleton\Unico as Unico;

$unico = Unico::getInstance();
$unico->nome = 'Bolinha';

echo $unico->nome;

$unico2 = Unico::getInstance();
$unico2->nome = 'Luluzinha';

echo $unico2->nome;
echo $unico->nome;