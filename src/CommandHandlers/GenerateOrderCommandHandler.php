<?php

namespace App\CommandHandlers;

use App\Actions\Action;
use App\Budget;
use App\Commands\GenerateOrderCommand;
use App\Order;

class GenerateOrderCommandHandler /* implements \SplSubject */
{
  /**
   * @var Action[]
   */
  private array $actions = [];

  public function __construct(/* Repository, MailService */)
  {
    
  }

  public function addAction(Action $action)
  {
    $this->actions[] = $action;
  }

  public function exec(GenerateOrderCommand $generateOrder)
  {
    $budget = new Budget();
    $budget->itemsQuantity = $generateOrder->getItemsQuantity();
    $budget->value = $generateOrder->getBudgetValue();

    $order = new Order();
    $order->finishDate = new \DateTimeImmutable();
    $order->clientName = $generateOrder->getClientName();
    $order->budget = $budget;

    foreach ($this->actions as $action)
    {
      $action->exec($order);
    }
  }
}