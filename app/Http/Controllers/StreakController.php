<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Streak;

class StreakController extends Controller
{
    public function show($slug)
    {
        $streak = Streak::whereSlug($slug)->first();
        return view('streak.show', compact('streak'));
    }
}
