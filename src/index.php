<?php

declare(strict_types=1);

use Kodebagus\FareCalculator\FareCalculator;
use Kodebagus\FareCalculator\FareRepositoryArray;

include 'vendor/autoload.php';

$fareRepo = new FareRepositoryArray();

// $tr->add(new FlatFare(10000));

// $basicPlans = [
//     ['class' => 1, 'start_time' => '00:00:00', 'end_time' => '07:59:59', 'price' => 10000],
//     ['class' => 2, 'start_time' => '00:00:00', 'end_time' => '07:59:59', 'price' => 20000],
// ];
// foreach ($basicPlans as $plan) {
//     $tr->add(new BasicFareCalculator($plan));
// }

// // print_r($tr->all());

// $tm = new FareCalculatorManager($tr);

$passager = [
    'class' => '1',
    'from'  => '1',
    'to'    => '2',
    'timestamp' => DateTime::createFromFormat('Y-m-d H:i:s', '2020-01-01 00:00:00'),
];

$calculator = new FareCalculator($fareRepo);
echo $tm->charge($passager);
