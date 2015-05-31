<?php

/**
 * @coversDefaultClass \bradchesney79\ptcd\Hello
 */
class HelloTest extends \PHPUnit_Framework_TestCase
{
	protected $hello;

	public function setUp()
	{
		$this->hello = new \bradchesney79\ptcd\Hello();
	}

	/**
	 * @covers ::world
	 */
	public function testWorld()
	{
		$this->assertSame('world', $this->hello->world());
	}
}
