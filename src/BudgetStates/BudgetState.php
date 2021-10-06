<?php

namespace App\BudgetStates;

use App\Budget;
use DomainException;

abstract class BudgetState
{
  abstract public function extraDiscountCalc(Budget $budget): float;

  public function approve(Budget $budget)
  {
    throw new DomainException(
      "This budget cannot be approved"
    );
  }

  public function disapprove(Budget $budget)
  {
    throw new DomainException(
      "This budget cannot be disapproved"
    );  
  }

  public function finalize(Budget $budget)
  {
    throw new DomainException(
      "This budget cannot be finalized"
    );  
  }
}