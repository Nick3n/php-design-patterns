<?php

namespace App\Actions;

use App\Order;

interface Action
{
  public function exec(Order $order): void;
}