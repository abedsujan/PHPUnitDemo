<?php

class HelloTest extends \PHPUnit_Framework_TestCase{
	protected $hello;

	public function setUp(){
		$this->hello = new Abed\PHPUnitDemo\Hello();	
	}

	public function testWorld(){
		$this->assertSame("world", $this->hello->world());
	}
}	