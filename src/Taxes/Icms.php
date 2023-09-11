<?php
namespace Inc\DesignPattern\Taxes;

use Inc\DesignPattern\Budget;

class Icms implements Tax{

    public function calculateTax(Budget $budget): float
    {
        return $budget->value * 0.18;
    }

}