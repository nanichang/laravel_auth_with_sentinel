<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function login() {
    	
    	return view('auth.login');

    }

    public function doLogin(Request $request) {
    	
    	Sentinel::authenticate($request->all());
    	return Sentinel::check();

    }
}
