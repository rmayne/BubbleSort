<?php
require_once ('bubbler.php');

class BubblerTest extends PHPUnit_Framework_TestCase
{

 	public function testCreateBubbler(){
	    $testData = array(12, 48, 99, 15000, -50, 1, 0, 3, 7, 88, 11, 33, 13, 20, 5, 6);
		return new Bubbler($testData);
 	}

	/**
	* @depends testCreateBubbler
	* Test to make sure the array is not sorted already.
	*/
	public function testBubblerAlreadySorted(Bubbler $aBubbler) 
	{
		$sortedArray = $aBubbler->getArray();
		sort($sortedArray);
		if($sortedArray == $aBubbler->getArray())
		{
			$this->fail('The Bubbler array is already sorted');
		}
		return $aBubbler;
	}

	/**
	* @depends testBubblerAlreadySorted
	* Test to see if the sort fucntion works.
	*/
	public function testBubblerSorting(Bubbler $aBubbler)
	{
		$sortedArray = $aBubbler->getArray();
		sort($sortedArray);
	    $aBubbler->bubbleSort();
		$this->assertEquals($sortedArray, $aBubbler->getArray());
	}
} 