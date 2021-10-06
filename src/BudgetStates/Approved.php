<?php

namespace App\BudgetStates;

use App\Budget;

class Approved extends BudgetState
{
  public function extraDiscountCalc(Budget $budget): float
  {
    return $budget->value * 0.02;
  }

  public function finalize(Budget $budget)
  {
    return $budget->state = new Finalized();
  }
}