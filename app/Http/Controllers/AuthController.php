<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $password = $request->input('password');


    if ($password === '123') {
        
        return redirect()->route('dashboard');
    } else {
      
        return back()->withErrors(['password' => 'Invalid password.']);
    }
}
}
