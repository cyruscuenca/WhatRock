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
    public function index(){
        return view('index');
    }
    public function properties(){
        return view('/learn/properties/index');
    }
    public function hardness(){
    	return view('learn/properties/hardness');
    }
    public function breakage(){
        return view('learn/properties/breakage');
    }
    public function cleavage(){
        return view('learn/properties/cleavage');
    }
}
