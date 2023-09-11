<?php

use Inc\DesignPattern\Budget;
use Inc\DesignPattern\Taxes\Icms;
use Inc\DesignPattern\TaxCalculator;

require 'vendor/autoload.php';


$calculator = new TaxCalculator();

$budget = new Budget();
$budget->value = 150;

echo $calculator->calculate($budget, new Icms());