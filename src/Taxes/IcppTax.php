<?php

namespace App\Taxes;

use App\Budget;
use App\Taxes\Tax;

class IccpTax implements Tax
{
  public function calc(Budget $budget): float
  {
    if ($budget->value > 500)
    {
      return $budget->value * 0.03;
    }

    return $budget->value * 0.02;
  }
}