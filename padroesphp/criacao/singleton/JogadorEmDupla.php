<?php
namespace padroesphp\criacao\singleton;

abstract class JogadorEmDupla extends Jogador
{
	private static $jogador1 = null;
	private static $jogador2 = null;
	private $id = null;
	
	private function __construct()
	{

	}
	
	public function getId()
	{
		return $this->id;
	}
	
	public static function getJogador1()
	{
		if (self::$jogador1 == null)
		{
			$class = get_called_class();
			self::$jogador1 = new $class();
			self::$jogador1->id = 1;
		}
		return self::$jogador1;
	}
	
	public static function getJogador2()
	{
		if (self::$jogador2 == null)
		{
			$class = get_called_class();
			self::$jogador2 = new $class();
			self::$jogador2->id = 2;
		}
		return self::$jogador2;
	}
	
	
	
}