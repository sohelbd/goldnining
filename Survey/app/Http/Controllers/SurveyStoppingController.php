<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyStoppingController extends Controller
{
    public function index()
    {
    	return view('Stopping.stopping_index');
    }
}
