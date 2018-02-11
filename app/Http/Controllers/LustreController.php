<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lustre;

class LustreController extends Controller
{
    public function show($slug)
    {
        $lustre = Lustre::whereSlug($slug)->first();
        return view('lustre.show', compact('lustre'));
    }
}
