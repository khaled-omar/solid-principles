<?php
namespace App\LSP;

/**
* Driver CLass
*/
class Driver
{
	protected $vehicle;

	function __construct(Vehicle $vehicle)
	{
		$this->vehicle = $vehicle;
	}
	
	/**
	 * Start Driving.
	 * 
	 * @return Void 
	 */
	public function go()
	{
		$this->vehicle->Move();
	}

	/**
	 * Stop Driving.
	 * 
	 * @return Void 
	 */
	public function stop()
	{
		$this->vehicle->Stop();
	}
}