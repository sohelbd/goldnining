<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MineBudgetController extends Controller
{
    public function index(){      	
   	return view ('Budget.Mine_budget.mine_budget');
   }
}
