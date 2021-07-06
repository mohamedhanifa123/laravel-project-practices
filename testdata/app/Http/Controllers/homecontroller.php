<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        return view('test');
    }
    public function index()
    {
        return view('login');
    }
    public function loginsubmit('Request.$request')
    {
        $validateddate data=$request->validate ([

            'email'=>'required|email',
            'password'=>'required|min:6|max:12'
        ]);
        $email=$request->input('email');
        $password=$request->input('password');
        return 'email':$email.'password':$password;

    }
}
