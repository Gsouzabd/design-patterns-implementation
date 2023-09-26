<?php

use Inc\DesignPattern\Budget;
use Inc\DesignPattern\Taxes\Icms;
use Inc\DesignPattern\TaxCalculator;
use Inc\DesignPattern\Taxes\TaxesTwoRates\IR;

require 'vendor/autoload.php';


$calculator = new TaxCalculator();

$budget = new Budget();
$budget->value = 5.000;


//ICMS
echo $calculator->calculate($budget, new Icms());

echo PHP_EOL;

//IR
echo $calculator->calculate($budget, new IR());