<?php

namespace App\BudgetStates;

use App\Budget;
use DomainException;

class Finalized extends BudgetState
{
  public function extraDiscountCalc(Budget $budget): float
  {
    throw new DomainException(
      "Finalized budgets are not available to reiceve extra discount"
    );
  }
}