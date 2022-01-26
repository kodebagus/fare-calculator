<?php

declare(strict_types=1);

namespace Kodebagus\FareCalculator;


/**
 * FlatFare
 */
class FlatFare extends Fare
{
    /**
     * Fare
     *
     * @var int
     */
    private int $Fare;
    
    /**
     * __construct
     *
     * @param  int $Fare
     * @return void
     */
    function __construct(int $price)
    {
        if ($price < 0) {
            throw new FareException('Price cannot be less than zero.');
        }
        $this->price = $price;
    }

    function getPrice(): int
    {
        return $this->price;
    }
}
