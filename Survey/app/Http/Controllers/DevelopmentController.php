<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevelopmentController extends Controller
{
       public function index(){
       	
   	return view ('Development.development');
   }
}