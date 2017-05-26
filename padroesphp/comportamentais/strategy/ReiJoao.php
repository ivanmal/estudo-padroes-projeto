<?php
namespace padroesphp\comportamentais\strategy;

class ReiJoao implements ImpostoInterface
{
	public function calcular($renda)
	{
		return $renda * 0.9;
	}
}
