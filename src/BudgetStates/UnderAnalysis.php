<?php

namespace App\BudgetStates;

use App\Budget;

class UnderAnalysis extends BudgetState
{
  public function extraDiscountCalc(Budget $budget): float
  {
    return $budget->value * 0.05;
  }

  public function approve(Budget $budget)
  {
    $budget->state = new Approved();
  }

  public function disapprove(Budget $budget)
  {
    $budget->state = new Disapproved();
  }
}