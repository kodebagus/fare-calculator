<?php

declare(strict_types=1);

namespace Kodebagus\FareCalculator;

class FareCalculator implements Calculable
{

    function __construct(FareRepository $fareRepository, RepositoryValidator $repositoryValidator)
    {
        $this->fareRepository      = $fareRepository;
        $this->repositoryValidator = $repositoryValidator;
    }

    function calculate(array $transaction): int
    {
        // todo : validate trans
        $this->transaction = $transaction;
        $matches = $this->findMatchFares();
        return $this->resolveEffectiveFare($matches)->getPrice();
    }

    protected function findMatchFares()
    {
        return $this->fareRepository->matchBasicFare($this->transaction['class'], $this->transaction['from'], $this->transaction['to']);
    }

    protected function resolveEffectiveFare($matches): Fare
    {
        return $matches[0];
    }
}
