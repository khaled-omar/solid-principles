<?php 
namespace App\OCP;

/**
* Area Calculator class
*/
class AreaCalculator
{
	public function area(array $shapes = []){
		$area = 0;
		foreach ($shapes as $shape) {
			$area += $shape->area();
		}
		return $area;
	} 
}