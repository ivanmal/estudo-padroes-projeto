<?php
use padroesphp\comportamentais\strategy\Imposto;

require 'autoload.php';

$class = $_GET['class'];

$class = "padroesphp\comportamentais\strategy\\$class";

$imposto = new Imposto(new $class());

$renda = (int) $_GET['renda'];

echo $imposto->calcular($renda);