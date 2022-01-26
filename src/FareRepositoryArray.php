<?php

declare(strict_types=1);

namespace Kodebagus\FareCalculator;

/**
 * fareRepositoryArray
 */
class FareRepositoryArray implements FareRepository
{
    /**
     * fares
     *
     * @var array
     */
    private array $fares = [];

    function __construct(array $fares = [])
    {
        foreach ($fares as $item) {
            if (
                isset($item['class'])
                && isset($item['from'])
                && isset($item['to'])
                && isset($item['price'])
            ) {
                $fare = new BasicFare($item['class'], $item['from'], $item['to'], $item['price']);
            } else {
                $fare = new FlatFare($item['price']);
            }
            array_push($this->fares, $fare);
        }
    }

    /**
     * add
     *
     * @param  mixed $fare
     * @return void
     */
    function add(Fare $fare)
    {
        return array_push($this->fares, $fare);
    }

    /**
     * get
     *
     * @param  mixed $id
     * @return void
     */
    function get($id)
    {
        $matched = array_filter($this->fares, function ($item) use ($id) {
            return $item['id'] == $id;
        });
        return $matched;
    }

    /**
     * filter
     *
     * @param  mixed $filters
     * @return void
     */
    function filter(array $filters)
    {
        $matched = [];
        foreach ($filters as $k => $v) {
            $key = array_search($v, array_column($this->fares, $k));
            $matched[] = $this->fares[$key];
        }
        return $matched;
    }

    /**
     * matchBasicFare
     *
     * @param  mixed $class
     * @param  mixed $from
     * @param  mixed $to
     * @return void
     */
    function matchBasicFare($class, $from, $to)
    {
        $matched = [];
        foreach ($this->fares as $k => $v) {
            if (
                $class   == $v->getClass()
                && $from == $v->getFrom()
                && $to   == $v->getTo()
            ) {
                $matched[] = $v;
            }
        }
        return $matched;
    }

    /**
     * all
     *
     * @return void
     */
    function all()
    {
        return $this->fares;
    }

    /**
     * remove
     *
     * @param  mixed $id
     * @return void
     */
    function remove($id)
    {
        $matched = array_filter($this->fares, function ($item) use ($id) {
            return $item['id'] != $id;
        });
        return $matched;
    }
}
