<?php

use App\Budget;
use App\DiscountCalculator;
use App\TaxCalculator;
use App\Taxes\IcmsTax;
use App\Taxes\IssTax;

require "vendor/autoload.php";

// Behavioral Patterns

/**
 * Strategy
 * Como diminuir a complexidade do nosso código, trocando múltiplas condicionais por classes
 * Nesse caso, a estratégia para calcular o imposto é passado no segundo parâmetro da função calc
 * https://refactoring.guru/design-patterns/strategy
 */
/*
$calculator = new TaxCalculator();
$budget = new Budget();
$budget->value = 100;

// Padrões Comportamentais
echo $calculator->calc($budget, new IcmsTax());
echo $calculator->calc($budget, new IssTax());
*/

/**
 * Chain of Responsability
 * Passa requisições ao passar de uma cadeia de tratamentos.
 * Cada método que trata decide se executará ou passará adiante a requisição
 * https://refactoring.guru/design-patterns/chain-of-responsibility
 */
/*
$calculator = new DiscountCalculator();
$budget = new Budget();
$budget->value = 600;
$budget->itemsQuantity = 5;

echo $calculator->calc($budget);
*/
/**
 * State
 * O padrão State é muito útil quando algum objeto pode ter diferentes comportamentos
 * State implementado no BudgetStates
 * https://refactoring.guru/design-patterns/state
 */

/**
 * Command (InputBoundary?)
 * CommandHandler/Usecases/ApplicationService
 * Torna a requisição em apenas um objeto que contém todas as informações sobre a requisição
 * Um Command Handler tem como responsabilidade, normalmente, 
 * apenas orquestrar as tarefas a serem executadas, 
 * ou seja, chamar as classes necessárias que realizam as tarefas desejadas. 
 * https://refactoring.guru/design-patterns/command
 * Implementado em order-generator, GenerateOrderCommand, GenerateOrderCommandHandler
*/
/**
 * Observer
 * Permite que você defina um sistema de inscrição para notificar multiplos objetor sobre eventos
 * que acontecem com o objeto que eles estão observando
 * https://refactoring.guru/design-patterns/observer
 * PHP Observer - https://www.php.net/manual/pt_BR/class.splobserver.php.
 */
/**
 * Iterator
 * Acessar um objeto, como se fosse uma lista percorrível
 * https://refactoring.guru/design-patterns/iterator
 * PHP Iterator - https://www.php.net/manual/pt_BR/class.iterator.php
 * https://www.php.net/manual/pt_BR/spl.iterators.php
 */


// Structural Patterns
/**
 * Adapter
 * A partir de uma mesma interface várias implementações
 * https://refactoring.guru/design-patterns/adapter
 */