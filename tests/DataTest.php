<?php declare (strict_types = 1);
use PHPUnit\Framework\TestCase;

final class DataTest extends TestCase
{

    /**
     * @dataProvider additionProvider
     */
    public function testAdd(int $first, int $second, int $sum)
    {
        $this->assertEquals($sum, ($first + $second));
    }

    public function additionProvider(): array
    {
        return [
            "1 + 0" => [1, 0, 1],
            "2 + 1" => [2, 1, 3],
            // "3 + 4" => [3, 4, 2],
        ];
    }
}
