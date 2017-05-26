<?php
require '../../autoload.php';

use padroesphp\criacao\factory\Db as Db;

$config = parse_ini_file( __DIR__ . DIRECTORY_SEPARATOR . 'config.ini');

$dbAdapter = Db::getFactory($config)->factory();

print_r($dbAdapter);

//$dbAdapter->insert('categorias', array('nome'=>'criação'));
//$dbAdapter->update('categorias', array('nome'=>'estruturais'), 'codigo=1');
$dbAdapter->delete('categorias', 'codigo=1');

