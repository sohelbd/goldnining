<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MineMethController extends Controller
{
        public function index (){
    	return view("System.Minemeth.minemeth");
    }
}
