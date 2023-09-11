<?php
namespace Inc\DesignPattern;

use Inc\DesignPattern\Budget;
use Inc\DesignPattern\Taxes\Tax;

class TaxCalculator{

    public function calculate(Budget $budget, Tax $tax ): float
    {
        return $tax->calculateTax($budget);
    }


}