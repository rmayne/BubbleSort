<?php
/*
* github.com/rmayne
* Sorting algorithms PHP OOP style
* License: MIT
*/

class bubbler
{
	private $sortMe; //holds the array to be sorted
	private $swappedFlag; //true if array is KNOWN to be swapped

	function __construct($anArray)
	{
		$this->sortMe = $anArray;
		$this->swappedFlag = false;
	}

	/*
	* classic unoptimized bubble sort PHP style :) 
	* Author: rmayne
	*	
	*/
	public function bubbleSort()
	{
		// do while the array is swapped
		do {

			// Upon entering each interation, we don't know if its sorted
			$this->swappedFlag = false;

			//iterate through the array
			for ($n = 1; $n < count($this->sortMe); $n++){

				// if a member is less than its preceding member
				if ($this->sortMe[$n] < $this->sortMe[($n - 1)]){ 

					//use a temp variable to swap unordered memebers
					$tempVar = $this->sortMe[$n];
					$this->sortMe[$n] = $this->sortMe[($n - 1)];
					$this->sortMe[($n - 1)] = $tempVar;

					// "remember" the array was swapped
					$this->swappedFlag = true;
				}
			}
		} while ($this->swappedFlag);

		return $this;
	}

	/*
	For encapsulation
	*/
	public function getArray()
	{
		return $this->sortMe;
	}
}
?>

	