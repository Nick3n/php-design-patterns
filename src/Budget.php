<?php

namespace App;

use App\BudgetStates\BudgetState;
use App\BudgetStates\UnderAnalysis;

class Budget
{
  public float $value;
  public int $itemsQuantity;
  public BudgetState $state;

  public function __construct()
  {
    $this->state = new UnderAnalysis();
  }

  public function extraDiscountApply()
  {
    $this->value -= $this->state->extraDiscountCalc($this);
  }

  public function approve()
  {
    $this->state->approve($this);
  }

  public function finalize()
  {
    $this->state->finalize($this);
  }

  public function disapprove()
  {
    $this->state->disapprove($this);
  }
}