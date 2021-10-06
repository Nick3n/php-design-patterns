<?php

namespace App\Taxes;

use App\Taxes\Tax;
use App\Budget;

class IcmsTax implements Tax
{
  public function calc(Budget $budget): float
  {
    return $budget->value * 0.1;
  }
}