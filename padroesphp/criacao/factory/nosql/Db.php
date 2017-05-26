<?php
namespace padroesphp\criacao\factory\nosql;

use padroesphp\criacao\factory\DbInterface;
use padroesphp\criacao\factory\FactoryInterface;

class Db implements FactoryInterface 
{
	private $config = null;
	
	public function __construct(array $config)
	{
		$this->config = $config;
	}
	
	/**
	 * 
	 * @return DbInterface
	 */
	public function factory()
	{
		$db = $this->config['db'];
		
		$class = __NAMESPACE__ . '\DbAdapter' . $db;		

		return new $class($this->config);
	}
}