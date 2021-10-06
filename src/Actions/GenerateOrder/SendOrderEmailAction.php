<?php

namespace App\Actions\GenerateOrder;

use App\Actions\Action;
use App\Order;

class SendOrderEmailAction implements Action
{
  public function exec(Order $order): void
  {
    echo "Sending e-mail to client...\n";
  }
}