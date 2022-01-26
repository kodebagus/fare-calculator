<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Kodebagus\FareCalculator\BasicFare;
use Kodebagus\FareCalculator\FareCalculator;
use Kodebagus\FareCalculator\FareRepositoryArray;
use Kodebagus\FareCalculator\RepositoryValidatorArray;

final class BasicFareTest extends TestCase
{
    public function testCreateInstance(): void
    {
        $this->assertInstanceOf(
            BasicFare::class,
            new BasicFare(1, 'a', 'b', 1000)
        );
    }

    public function testRateTransaction(): void
    {
        // Arrange
        $props = [
            [
                'class' => 1,
                'from' => 'a',
                'to' => 'b',
                'price' => 1000,
            ],
            [
                'class' => 1,
                'from' => 'b',
                'to' => 'c',
                'price' => 2000,
            ],
        ];
        $fc     = new FareCalculator(new FareRepositoryArray($props), new RepositoryValidatorArray());

        // Action
        $transaction = [
            'class'   => 1,
            'from'   => 'b',
            'to'   => 'c',
        ];
        $result = $fc->calculate($transaction);

        // Assert
        $this->assertEquals($result, 2000);
    }
}
