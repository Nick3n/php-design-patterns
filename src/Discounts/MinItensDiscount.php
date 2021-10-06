<?php

namespace App\Discounts;

use App\Budget;

class MinItensDiscount extends Discount
{
  public function calc(Budget $budget): float
  {
    if ($budget->itemsQuantity > 5)
    {
      return $budget->value * 0.1;
    }

    return $this->nextDiscount->calc($budget);
  }
}