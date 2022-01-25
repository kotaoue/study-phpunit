<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class CheckerTest extends TestCase
{
    /**
     * @dataProvider isTrueDataProvider
     */
    public function testIsTrue($input, bool $expected): void
    {
        if (true) {
            $this->assertEquals($expected, Checker::isTrue($input));
        } else {
            $this->assertEquals($expected, Checker::isTrue($input));
        }
    }

    public function isTrueDataProvider(): array
    {
        return [
            'string: not true' => ['false', false],
            'string: true' => ['true', false],  //
            'bool: not true' => [false, false],
            'bool: true' => [true, false],
            'int' => [0, false],
        ];
    }
}
