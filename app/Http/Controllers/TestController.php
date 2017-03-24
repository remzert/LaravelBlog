<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use resources\view\page;

class TestController extends Controller
{
    public function index()
	{
	
	 //return View::make ('test');
	return view('page/pagetest');
	
	}
}
