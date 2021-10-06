<?php

namespace App\Commands;

use App\Budget;
use App\Order;

class GenerateOrderCommand
{
  private float $budgetValue;
  private int $itemsQuantity;
  private string $clientName;

  public function __construct(
    float $budgetValue,
    int $itemsQuantity,
    string $clientName
  )
  {
    $this->budgetValue = $budgetValue;
    $this->itemsQuantity = $itemsQuantity;
    $this->clientName = $clientName;
  }

  /**
   * Get the value of budgetValue
   */ 
  public function getBudgetValue()
  {
    return $this->budgetValue;
  }

  /**
   * Get the value of itemsQuantity
   */ 
  public function getItemsQuantity()
  {
    return $this->itemsQuantity;
  }

  /**
   * Get the value of clientName
   */ 
  public function getClientName()
  {
    return $this->clientName;
  }
}