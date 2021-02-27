<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MillActualController extends Controller
{
       public function index(){
       	
   	return view ('Monthly.Mill_actual.mill_actual');
   }
}
