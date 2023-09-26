<?php
namespace Inc\DesignPattern\Taxes\TaxesTwoRates;

use Inc\DesignPattern\Taxes\TaxTwoRates;

class IR extends TaxTwoRates{

    public function mustApplyMaximumRate($budget): bool
    {
        return $budget->value > 4.66468;  
    }
    
    public function applyMaximumRate($budget): float
    {
        return $budget->value * 0.275;
    }

    public function applyMinimumRate($budget): float
    {
        return $budget->value * 0.075;
    }
}