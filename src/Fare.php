<?php

declare(strict_types=1);

namespace Kodebagus\FareCalculator;

/**
 * Fare
 */
abstract class Fare
{

    /**
     * id
     *
     * @var mixed
     */
    protected $id;

    /**
     * price
     *
     * @var int
     */
    protected int $price;

    /**
     * __construct
     *
     * @return void
     */
    function __construct()
    {
        $this->id = uniqid();
        return $this->id;
    }

    /**
     * getId
     *
     * @return void
     */
    protected function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of price
     *
     * @return int
     */
    abstract function getPrice(): int;
}
