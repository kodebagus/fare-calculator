# Intro

Fare Calculator

## Installation

```
composer require kodebagus/fare-calculator
```

## Usage

```
<?php

use Kodebagus\FareCalculator\FareCalculator;
use Kodebagus\FareCalculator\FareRepositoryArray;
use Kodebagus\FareCalculator\RepositoryValidatorArray;

include 'vendor/autoload.php';

$fares = [];

$repoValidator = new RepositoryValidatorArray();
$fareRepo      = new FareRepositoryArray(
    [
        ['class' => '1', 'from' => 'a', 'to' => 'b', 'price' => 5000],
        ['class' => '2', 'from' => 'a', 'to' => 'b', 'price' => 7000],
        ['class' => '3', 'from' => 'a', 'to' => 'b', 'price' => 8000],
        ['class' => '4', 'from' => 'a', 'to' => 'b', 'price' => 9000],
        ['class' => '1', 'from' => 'b', 'to' => 'c', 'price' => 5500],
        ['class' => '2', 'from' => 'b', 'to' => 'c', 'price' => 7500],
        ['class' => '3', 'from' => 'b', 'to' => 'c', 'price' => 8500],
        ['class' => '4', 'from' => 'b', 'to' => 'c', 'price' => 9500],
    ]
);

$passager = [
    'class' => '1',
    'from'  => 'a',
    'to'    => 'b',
];

$calculator = new FareCalculator($fareRepo, $repoValidator);
echo $calculator->calculate($passager);
```