<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function calcularFibonacci($n)
    {
        $fibonacci  = [0,1];
 
        for($i=2;$i<=$n;$i++)
          {
              $fibonacci[] = $fibonacci[$i-1]+$fibonacci[$i-2];
          }
          return $fibonacci;
    }
}
