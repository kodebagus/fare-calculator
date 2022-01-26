<?php

declare(strict_types=1);

namespace Kodebagus\FareCalculator;

/**
 * RepositoryValidatorArray
 */
class RepositoryValidatorArray implements RepositoryValidator
{

    /**
     * validate
     *
     * @param  FareRepository $fare
     * @return void
     */
    function validate(FareRepository $fare)
    {
        // todo: implement !
        // - flat fare --> no duplicate, must be singleton
        // - basic fare --> no overlapping
        return true;
    }
}
