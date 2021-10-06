<?php

use App\Budget;
use App\BudgetList;

require_once 'vendor/autoload.php';

$budgetList = new BudgetList();

$budget1 = new Budget();
$budget1->itemsQuantity = 7;
$budget1->disapprove();
$budget1->value = 1500.75;

$budget2 = new Budget();
$budget2->itemsQuantity = 3;
$budget2->disapprove();
$budget2->value = 150;

$budget3 = new Budget();
$budget3->itemsQuantity = 5;
$budget3->approve();
$budget3->finalize();
$budget3->value = 1350;

$budgetList->add($budget1);
$budgetList->add($budget2);
$budgetList->add($budget3);

foreach ($budgetList->finalized() as $budget)
{
  echo "Value: ". $budget->value ."\n";
  echo "State: ". get_class($budget->state) ."\n";
  echo "Items: ". $budget->itemsQuantity ."\n";
  echo "\n";
}