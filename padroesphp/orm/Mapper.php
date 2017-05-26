<?php
namespace padroesphp\orm;

use padroesphp\orm\TableGateway;
use padroesphp\criacao\factory\DbInterface;

class Mapper extends TableGateway
{
	protected $primaryKey = null;
	
	protected $rowClass = '\\padroesphp\\orm\\ActiveRecord';
	
	public function __construct($table, $primaryKey, $adapter)
	{
		$this->primaryKey = $primaryKey;
		parent::__construct($table, $adapter);
	}
	
	public function getPrimaryKey()
	{
		return $this->primaryKey;
	}
	
	public function getTable()
	{
		return $this->table;
	}
	
	public function insert(array $cols)
	{
		$this->adapter->insert($this->table, $cols);
	}

	public function update(array $cols, $where)
	{
		$this->adapter->update($this->table, $cols, $where);
	}

	public function delete($where)
	{
		$this->adapter->delete($this->table, $where);
	}
	
	public function newRow()
	{
		$element = $this->adapter->getFields($this->table);		
		
		$row = new ActiveRecord($element, $this->adapter, $this, array('state'=>'new'));
		
		return $row;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}