<?php

namespace App\Actions\GenerateOrder;

use App\Actions\Action;
use App\Order;

class SaveOrderAction implements Action
{
  public function exec(Order $order): void
  {
    echo "Creating order in database...\n";
  }
}