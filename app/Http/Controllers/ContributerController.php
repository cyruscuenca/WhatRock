<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContributerController extends Controller
{
    public function index(){
    	return view('contributer.index');
    }
}
