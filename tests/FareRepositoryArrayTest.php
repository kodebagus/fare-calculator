<?php

declare(strict_types=1);

use Kodebagus\FareCalculator\BasicFare;
use PHPUnit\Framework\TestCase;
use Kodebagus\FareCalculator\FareRepositoryArray;

final class FareRepositoryArrayTest extends TestCase
{
    public function testCreateInstance(): void
    {
        $this->assertInstanceOf(
            FareRepositoryArray::class,
            new FareRepositoryArray()
        );
    }

    function testBasicFind()
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
        $fr     = new FareRepositoryArray();
        foreach ($props as $item) {
            $bf = new BasicFare($item['class'], $item['from'], $item['to'], $item['price']);
            $fr->add($bf);
        }

        // Action
        $class   = 1;
        $from    = 'a';
        $to      = 'b';
        $result  = $fr->matchBasicFare($class, $from, $to);

        // Assert
        $this->assertEquals($result[0]->getPrice() ?? 0, 1000);
    }
}
