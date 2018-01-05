<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
    	return view('about');
    }
    public function partners(){
    	return view('partners');
    }
    public function contribute(){
    	return view('contribute');
    }
}
