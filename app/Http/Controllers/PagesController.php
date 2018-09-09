<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
    	return view('pages.about');
    }
    public function partners(){
    	return view('pages.partners');
    }
    public function contribute(){
    	return view('pages.contribute');
    }
    public function terms(){
    	return view('pages.terms');
    }
    public function news(){
        return view('pages.news');
    }
    public function earthquakes(){
        return view('pages.earthquakes');
    }
    public function maps(){
        return view('pages.maps');
    }
    public function index(){
        return view('index');
    }
    public function properties(){
        return view('learn.properties.index');
    }
    public function hardness(){
    	return view('learn.properties.hardness');
    }
    public function breakage(){
        return view('learn.properties.breakage');
    }
    public function cleavage(){
        return view('learn.properties.cleavage');
    }
}
