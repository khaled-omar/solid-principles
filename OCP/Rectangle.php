<?php 
namespace App\OCP;
/**
* 
*/
class Rectangle implements Shape
{
	private $width;
	private $height;
	function __construct($width, $height)
	{
		$this->height = $height;
		$this->width = $width;
	}
	public function area()
	{
		return $this->height * $this->width;
	}
}