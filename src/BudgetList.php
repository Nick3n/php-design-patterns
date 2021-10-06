<?php

namespace App;

use App\BudgetStates\Finalized;
use ArrayIterator;
use IteratorAggregate;

class BudgetList implements IteratorAggregate
{
  /**
   * @var Budget[]
   */
  private array $budgets;

  public function __construct()
  {
    $this->budgets = [];
  }

  public function add(Budget $budget)
  {
    $this->budgets[] = $budget;
  }
  
  public function getIterator()
  {
    return new ArrayIterator($this->budgets);
  }

  public function finalized(): array
  {
    return array_filter(
      $this->budgets,
      fn (Budget $budget) => $budget->state instanceof Finalized
    );
  }

}