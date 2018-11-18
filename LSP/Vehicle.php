<?php
namespace App\LSP;
/**
*	Vehicle class. 
*/
abstract class Vehicle
{
	/**
	 * Move the Vehicle.
	 */
	abstract public function Move();

	/**
	 * Stops the vehicle from moving.
	 */
	abstract public function Stop();
}