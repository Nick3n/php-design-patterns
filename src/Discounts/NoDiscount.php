<?php

namespace App\Discounts;

use App\Budget;

class NoDiscount extends Discount
{
  public function __construct()
  {
    parent::__construct(null);
  }

  public function calc(Budget $budget): float
  {
    return 0;
  }
}