<?php

declare(strict_types=1);

namespace Kodebagus\FareCalculator;

interface Calculable
{
    function calculate(array $transaction): int;
}
