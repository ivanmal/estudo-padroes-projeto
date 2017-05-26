<?php

use padroesphp\orm\Mapper;

require 'autoload.php';

use padroesphp\criacao\factory\Db;

define('DS', DIRECTORY_SEPARATOR);

$config = parse_ini_file(__DIR__ . DS  . 'criacao' . DS
		. 'factory' . DS . 'config.ini');

$adapter = Db::getFactory($config)->factory();

$table = new Mapper('problemas', 'codigo', $adapter);

$row = $table->newRow();

$row->codigo = $_GET['codigo'];
$row->descricao = $_GET['descricao'];

$row->insert();

$problemas = $table->select();

echo '<pre>';
//echo print_r($problemas,true);
echo '</pre>';

foreach($problemas as $problema)
{
	echo $problema->getDescricao() . '<br>';
}








