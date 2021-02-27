<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirmMillActualController extends Controller
{
       public function index(){
       	
   	return view ('Monthly.Firm_mill_actual.firm_mill_actual');
   }
}
