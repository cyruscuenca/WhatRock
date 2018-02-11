<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Color;

class ColorController extends Controller
{
    public function show($slug)
    {
        $color = Color::whereSlug($slug)->first();
        return view('color.show', compact('color'));
    }
}
