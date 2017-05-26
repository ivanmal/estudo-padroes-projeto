<?php
namespace padroesphp\criacao\factory\sql;

use padroesphp\criacao\factory\DbInterface as DbInterface;

class DbAdapterDebil implements DbInterface
{
	public function __construct(array $config)
	{				
	}
	
	public function insert($table, array $fields)
	{
		
	}
	
	public function update($table, array $fields, $where)
	{
	
	}
	
	public function delete($table, $where)
	{
	
	}

	public function select($table, $where)
	{
	
	}
	
	
}