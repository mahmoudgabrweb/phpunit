<?php declare (strict_types = 1);
use PHPUnit\Framework\TestCase;

final class MultipleDependenciesTest extends TestCase
{
    public function testFirstProducer(): string
    {
        $this->assertTrue(true);
        return 'first';
    }

    public function testSecondProducer(): string
    {
        $this->assertTrue(true);
        return 'second';
    }

    /**
     * @depends testFirstProducer
     * @depends testSecondProducer
     */
    public function testConsumer(string $first_producer, string $second_producer): void
    {
        $this->assertSame('first', $first_producer);
        $this->assertSame('second', $second_producer);
    }
}
