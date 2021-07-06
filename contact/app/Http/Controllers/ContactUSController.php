<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUS;

class ContactUSController extends Controller
{
    public function contactUS()
    {
        return view('contactUS');
    }

    public function contactUSPost(Request $request)
    {
        $this->validate($request, [

            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        ContactUS::create($request->all());
        return back()->with('success','thanks for contacting us!');

    }
}
