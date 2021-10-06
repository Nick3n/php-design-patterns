<?php

namespace App;

use App\Discounts\MinItensDiscount;
use App\Discounts\MinPriceDiscount;
use App\Discounts\NoDiscount;

class DiscountCalculator
{
  public function calc(Budget $budget): float
  {
    $discountChain = new MinItensDiscount(
      new MinPriceDiscount(
        new NoDiscount()
      )
      );

    return $discountChain->calc($budget);
  }
}