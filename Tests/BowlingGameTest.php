<?php

class BowlingGameTest extends PHPUnit_Framework_TestCase
{
	protected $bowlingGame;

	protected function setUp ()
	{
		$this->bowlingGame = new BowlingGame ();
	}

	public function testRoll ()
	{
		$this->bowlingGame->rollFrame (1);
	}
}