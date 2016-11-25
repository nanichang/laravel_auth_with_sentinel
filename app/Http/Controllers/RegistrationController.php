<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
// use Request;

class RegistrationController extends Controller
{
    public function register() {
    	return view('auth.register');
    }

    public function store(Request $request) {
    	// $this->validate($request, [
     //        'name' => 'required',
     //        'code' => 'required',
     //    ]);

    	$user = Sentinel::registerAndActivate($request->all());
		dd($user);
    }


}
