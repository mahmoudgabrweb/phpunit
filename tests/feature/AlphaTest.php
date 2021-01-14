<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class AlphaTest extends TestCase
{
	public function testAlpha()
	{
		$this->get("/src/alpha.php");
	}
}