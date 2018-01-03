<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModController extends Controller
{
    public function index(){
    	return view('mod.index');
    }
}
