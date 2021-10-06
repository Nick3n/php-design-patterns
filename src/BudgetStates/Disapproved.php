<?php

namespace App\BudgetStates;

use App\Budget;
use DomainException;

class Disapproved extends BudgetState
{
  public function extraDiscountCalc(Budget $budget): float
  {
    throw new DomainException(
      "Disapproved budgets are not available to reiceve extra discount"
    );
  }

  public function finalize(Budget $budget)
  {
    return $budget->state = new Finalized();
  }
}