<?php

namespace App;

use App\BudgetStates\Finalized;
use App\Http\HttpAdapter;
use DomainException;

class BudgetRegister
{
  private HttpAdapter $http;

  public function __construct(HttpAdapter $http)
  {
    $this->http = $http;  
  }

  function register(Budget $budget): void
  {
    if (!($budget->state instanceof Finalized)) 
      throw new DomainException('Only finalized budget can be registered');

    $this->http->post('http://api.register.budget.com', [
      'value' => $budget->value,
      'itemsQuantity' => $budget->itemsQuantity
    ]);
    //file_get_contents('http://api.register.budget');
    //curl_init();
  }
}