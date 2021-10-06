<?php

namespace App\Reports;

use App\Budget;
use SimpleXMLElement;
use ZipArchive;

class BudgetZipReport
{
  public function export(Budget $budget)
  {  
    $path = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'budger.zip';
    $zip = new ZipArchive();
    $zip->open($path, ZipArchive::CREATE);
    $zip->addFromString('budget.serial', serialize($budget));
  }
}