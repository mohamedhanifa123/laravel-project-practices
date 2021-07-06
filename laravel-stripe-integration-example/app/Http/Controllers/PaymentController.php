<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe;
use Session;

class PaymentController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function makePayment(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        
       /* $request->validate([
            'nameoncard' => 'required',
            'cardnumber' => 'required',
            'transactionid' => 'required',
        ]);
    
        payment::create($request->all());
     
        return redirect()->route('make-payment')
                        ->with('success','Post created successfully.'); **/

        $charge=Stripe\Charge::create ([
                "amount" => 120 * 100,
                "currency" => "inr",
                "source" => $request->stripeToken,
                "description" => "Make payment and chill." 
        ]);

        if($charge['status']=='succeeded')
{
    dd($charge);
}  
        Session::flash('success', 'Payment successfully made.');
          
        return back();
    }
}
