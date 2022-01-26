<?php

declare(strict_types=1);

namespace Kodebagus\FareCalculator;

/**
 * BasicRate
 */
class BasicFare extends Fare
{
    /**
     * class
     *
     * @var mixed
     */
    protected $class;

    /**
     * from
     *
     * @var mixed
     */
    protected $from;

    /**
     * to
     *
     * @var mixed
     */
    protected $to;

    /**
     * price
     *
     * @var mixed
     */
    protected int $price;


    function __construct($class, $from, $to, $price)
    {
        $this->class     = $class;
        $this->from      = $from;
        $this->to        = $to;
        $this->price     = $price;
    }

    /**
     * Get the value of price
     *
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @param int $price
     *
     * @return self
     */
    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of class
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set the value of class
     */
    public function setClass($class): self
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get the value of from
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set the value of from
     */
    public function setFrom($from): self
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get the value of to
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set the value of to
     */
    public function setTo($to): self
    {
        $this->to = $to;

        return $this;
    }
}
