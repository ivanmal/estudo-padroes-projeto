<?php
namespace padroesphp\comportamentais\strategy;

class Imposto
{
	/**
	 * 
	 * @var ImpostoInterface
	 */
	private $strategy;
	
	/**
	 * 
	 * @param ImpostoInterface $strategy
	 */
	public function __construct(ImpostoInterface $strategy)
	{
		$this->strategy = $strategy;
	}
	
	public function calcular($renda)
	{
		return $this->strategy->calcular($renda);
	}	
}