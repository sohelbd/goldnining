<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MineActualController extends Controller
{
       public function index(){
       	
   	return view ('Monthly.Mine_actual.mine_actual');
   }
}
