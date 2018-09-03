<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class VerifyController extends Controller
{
    public function verify($token) 
    {
    	User::where('token', $token)->findOrFail()->update(['token' => null]);

    	return redirect()->route('/');
    }
}
