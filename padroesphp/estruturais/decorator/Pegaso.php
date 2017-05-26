<?php
namespace padroesphp\estruturais\decorator;

class Pegaso
{
	private $decorators = array();
	
	public function addDecorator($object)
	{
		$this->decorators[] = $object;
	}
	
	public function __call($method, array $args)
	{
		foreach($this->decorators as $decorator)
		{
			if (method_exists($decorator, $method))
				//$decorator->$method();
				call_user_func_array(array($decorator,$method), $args);
		}
	}
}