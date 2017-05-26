<?php
namespace padroesphp\criacao\factory;

use padroesphp\criacao\factory\DbInterface;

interface FactoryInterface
{
	/**
	 * @return DbInterface
	 */
	public function factory();
}