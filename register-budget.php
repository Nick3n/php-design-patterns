<?php

use App\Budget;
use App\BudgetRegister;
use App\Http\CurlHttpAdapter;

require 'vendor/autoload.php';

$registerBudget = new BudgetRegister(new CurlHttpAdapter());
$registerBudget->register(new Budget());