<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StockPileController extends Controller
{
        public function index (){
    	return view("Monthly.Stock_pile.stock_pile");
    }
}
