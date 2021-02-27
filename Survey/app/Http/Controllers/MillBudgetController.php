<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MillBudgetController extends Controller
{
    public function index(){      	
   	return view ('Budget.Mill_budget.mill_budget');
   }
}
