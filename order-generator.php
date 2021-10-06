<?php

require_once 'vendor/autoload.php';

use App\Actions\GenerateOrder\GenerateOrderLogAction;
use App\Actions\GenerateOrder\SaveOrderAction;
use App\Actions\GenerateOrder\SendOrderEmailAction;
use App\CommandHandlers\GenerateOrderCommandHandler;
use App\Commands\GenerateOrderCommand;

$budgetValue = $argv[1];
$itemsQuantity = $argv[2];
$clientName = $argv[3];

$generateOrderCommand = new GenerateOrderCommand(
  $budgetValue, 
  $itemsQuantity, 
  $clientName
);

$generateOrderCommandHandler = new GenerateOrderCommandHandler();
$generateOrderCommandHandler->addAction(new SaveOrderAction());
$generateOrderCommandHandler->addAction(new SendOrderEmailAction());
$generateOrderCommandHandler->addAction(new GenerateOrderLogAction());

$generateOrderCommandHandler->exec($generateOrderCommand);