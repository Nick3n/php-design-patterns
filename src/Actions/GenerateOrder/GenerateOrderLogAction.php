<?php

namespace App\Actions\GenerateOrder;

use App\Actions\Action;
use App\Order;

class GenerateOrderLogAction implements Action
{
  public function exec(Order $order): void
  {
    echo "Generating log...\n";
  }
}