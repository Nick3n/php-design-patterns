<?php

namespace App;

use DateTimeImmutable;

class Order
{
  public string $clientName;
  public DateTimeImmutable $finishDate;
  public Budget $budget;
}