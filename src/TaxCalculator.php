<?php

namespace App;
use App\Budget;
use App\Taxes\Tax;

class TaxCalculator
{
  public function calc(Budget $budget, Tax $tax): float
  {
    return $tax->calc($budget);
  }
}