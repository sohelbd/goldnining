<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeadingController extends Controller
{
        public function index (){

    	return view("Heading.heading");
    }
}
