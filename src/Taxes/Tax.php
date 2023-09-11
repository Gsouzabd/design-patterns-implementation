<?php
namespace Inc\DesignPattern\Taxes;

use Inc\DesignPattern\Budget;


interface Tax{

    public function calculateTax(Budget $budget): float;

}