<?php
namespace padroesphp\comportamentais\strategy;

class Brasil implements ImpostoInterface
{
	public function calcular($renda)
	{
		$imposto = 0;
		
		if ($renda > 1000 && $renda <= 3000)
		{
			$imposto = 0.5 * $renda; 
		}
		if ($renda > 3000 && $renda <= 5000)
		{
			$imposto = 0.7 * $renda;
		}
		if ($renda > 5000 && $renda <= 1000000)
		{
			$imposto = 0.8 * $renda;
		}
		if ($renda > 1000000)
		{
			$imposto = 0.1 * $renda;
		}		
		
		return $imposto;
	}
}
