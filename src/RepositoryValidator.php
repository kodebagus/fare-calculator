<?php

declare(strict_types=1);

namespace Kodebagus\FareCalculator;

/** 
 * interface 
 * 
 */
interface RepositoryValidator
{

    /**
     * validate
     *
     * @param  mixed $fare
     * @return void
     */
    function validate(FareRepository $fare);
}
