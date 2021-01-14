<?php declare (strict_types = 1);
use PHPUnit\Framework\TestCase;
/**
 * Test class for SampleTest
 */
class SampleTest extends TestCase
{
	
	public function testSomething()
	{
		$this->assertTrue(true, "This should already work.");

		$this->makeTestIncomplete('This is incomplete test...');
	}
}