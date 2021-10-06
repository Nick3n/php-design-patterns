<?php

namespace App\Taxes;

use App\Budget;

interface Tax
{
  public function calc(Budget $budget): float;
}