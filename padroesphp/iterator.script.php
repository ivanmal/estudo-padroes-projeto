<?php

require 'autoload.php';

use padroesphp\criacao\factory\Db;

define('DS', DIRECTORY_SEPARATOR);

$config = parse_ini_file(__DIR__ . DS  . 'criacao' . DS
		. 'factory' . DS . 'config.ini');

$adapter = Db::getFactory($config)->factory();

//$adapter->insert('categorias', array('nome'=>'criação'));
//$adapter->insert('categorias', array('nome'=>'estruturais'));
//$adapter->insert('categorias', array('nome'=>'comportamentais'));

$categorias = $adapter->select('categorias', null);

foreach($categorias as $categoria)
{
	echo $categoria['nome'] . '<br>';
}