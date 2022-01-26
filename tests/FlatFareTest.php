<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Kodebagus\FareCalculator\FlatFare;

final class FlatFareTest extends TestCase
{
    public function testCreateInstance(): void
    {
        $this->assertInstanceOf(
            FlatFare::class,
            new FlatFare(100)
        );
    }

    public function testMinusPrice(): void
    {
        $this->expectExceptionMessage('Price cannot be less than zero.');
        $fare = new FlatFare(-100);
        $fare->getPrice();
    }


}

