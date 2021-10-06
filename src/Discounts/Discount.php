<?php

namespace App\Discounts;

use App\Budget;

abstract class Discount
{
  public ?Discount $nextDiscount;

  public function __construct(?Discount $nextDiscount)
  {
    $this->nextDiscount = $nextDiscount;
  }

  abstract public function calc(Budget $budget): float;
}