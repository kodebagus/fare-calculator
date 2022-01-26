<?php

declare(strict_types=1);

namespace Kodebagus\FareCalculator;

use Kodebagus\FareCalculator\Fare;

/** 
 * interface FareRepository
 * 
 */
interface FareRepository
{

    /**
     * add
     *
     * @param  mixed $fare
     * @return void
     */
    function add(Fare $fare);

    /**
     * get
     *
     * @param  mixed $id
     * @return void
     */
    function get($id);

    /**
     * filter
     *
     * @param  mixed $filters
     * @return void
     */
    function filter(array $filters);

    /**
     * all
     *
     * @return void
     */
    function all();

    /**
     * remove
     *
     * @param  mixed $id
     * @return void
     */
    function remove($id);
}
