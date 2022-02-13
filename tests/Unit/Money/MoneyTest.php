<?php
declare(strict_types=1);

namespace Tests\Unit\Money;

use TddPhp\Money\Dollar;
use Tests\TestCase;

class MoneyTest extends TestCase
{
    public function testMultiplication(): void
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        self::assertEquals(10, $product->amount);
        $product = $five->times(3);
        self::assertEquals(15, $product->amount);
    }

    public function testEquality()
    {
        self::assertTrue((new Dollar(5))->equals(new Dollar(5)));
        self::assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}
