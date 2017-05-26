<?php
function autoload($class)
{
	$class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
	
	require $class . '.php';
}

set_include_path(realpath(__DIR__ . '/../')  . PATH_SEPARATOR .
get_include_path());

spl_autoload_register('autoload');