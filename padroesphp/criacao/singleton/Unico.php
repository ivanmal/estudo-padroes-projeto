<?php
namespace padroesphp\criacao\singleton;

class Unico
{
	private static $instance = null;
	public $nome = null;
	
	private function __construct()
	{
		
	}	
	
	public static function getInstance()
	{
		if (self::$instance == null)
			self::$instance = new Unico();
		
		return self::$instance;
	}
}