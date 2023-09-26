<?php
namespace Inc\DesignPattern\Taxes;

use Inc\DesignPattern\Budget;
use Inc\DesignPattern\Taxes\Tax;

abstract class TaxTwoRates implements Tax{

    public function calculateTax(Budget $budget): float
    {
        if($this->mustApplyMaximumRate($budget)){
            return $this->applyMaximumRate($budget);
        }

        return $this->applyMinimumRate($budget);
    }

    abstract function mustApplyMaximumRate($budget): bool;
    abstract function applyMaximumRate($budget): float;
    abstract function applyMinimumRate($budget): float;
}