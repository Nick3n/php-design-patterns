<?php

namespace App\Taxes;

use App\Budget;
use App\Taxes\Tax;

class IkcvTax implements Tax
{
  public function calc(Budget $budget): float
  {
    if ($budget->value > 300 && $budget->itemsQuantity > 3)
    {
      return $budget->value * 0.04;
    }

    return $budget->value * 0.025;
  }
}