<?php

namespace App\Reports;

use App\Budget;
use SimpleXMLElement;

class BudgetXmlReport
{
  public function export(Budget $budget): string
  {
    $budgetElement = new SimpleXMLElement('<budget/>');
    $budgetElement->addChild('value', $budget->value);
    $budgetElement->addChild('items_quantity', $budget->itemsQuantity);
    
    return $budgetElement->asXML();
  }
}