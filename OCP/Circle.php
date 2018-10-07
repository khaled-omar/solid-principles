<?php 
namespace App\OCP;
/**
* 
*/
class Circle implements Shape
{
	private $radius;

	function __construct($radius)
	{
		$this->radius = $radius;	
	}
	public function area()
	{
		return $this->radius * $this->radius * pi();
	}
}