<?php declare (strict_types = 1);
use PHPUnit\Framework\TestCase;

/**
 * 
 */
class DatabaseTest extends TestCase
{
	
	protected function setUp(): void
	{
		if(!extension_loaded("mysqli")) {
			$this->markTestSkipped(
				'The MySQLi extension is not loaded.'
			);
		// } else {
			// $this->assertTrue(true);
		}
	}

	public function testConnection(): void
	{

	}
}