<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeriodController extends Controller
{
   public function index(){
   	return view ('System.Period.period_index');
   }
}
