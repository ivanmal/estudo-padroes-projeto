<?php
namespace padroesphp\comportamentais\observer;

class Predio
{
	private $temperatura;
	private $observers = array();
	
	public function setTemperatura($graus)
	{
		$this->temperatura = $graus;
		if ($this->temperatura > 40)
		{
			$this->notify();
		}
	}
	
	public function addObserver($observer)
	{
		$this->observers[] = $observer;
	}
	
	public function notify()
	{
		foreach($this->observers as $observer)
		{
			$observer->notify();
		}
	}
	
}