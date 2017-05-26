<?php

use padroesphp\orm\TableGateway;

require 'autoload.php';

use padroesphp\criacao\factory\Db;

define('DS', DIRECTORY_SEPARATOR);

$config = parse_ini_file(__DIR__ . DS  . 'criacao' . DS
		. 'factory' . DS . 'config.ini');

$adapter = Db::getFactory($config)->factory();

//$adapter->insert('categorias', array('nome'=>'criação'));
//$adapter->insert('categorias', array('nome'=>'estruturais'));
//$adapter->insert('categorias', array('nome'=>'comportamentais'));


$table = new TableGateway('problemas', $adapter);

//$categorias = $adapter->select('problemas',array('descricao'));

$problemas = $table->select();

echo '<pre>';
echo print_r($problemas,true);
echo '</pre>';

foreach($problemas as $problema)
{
	echo $problema->getDescricao() . '<br>';
}








