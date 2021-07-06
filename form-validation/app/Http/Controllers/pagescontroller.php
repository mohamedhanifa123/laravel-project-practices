<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\post;
use Session;


class pagescontroller extends Controller
{
    public function getcontact(){

        return view('pages.contact');
    }
    public function postcontact(request $request){

        $this->validate($request,[
            'email'=>'required|email',
            'subject' => 'min:3',
            'message'=>'min:15']);
        $data = array(
            "email"=>$request->email,
            "subject"=>$request->subject,
            "bodyMessage"=>$request->message
           
        );
        Mail::send('emails.contact',$data,function($message) use ($data){
        $message->from($data['email']);
        $message->to('mohamedhanifa@integrass.com');
        $message->subject($data['subject']);
        
        });
      Session::flash('success','Your Email was Sent!');
        
        return redirect()->route('pages.welcome');
           }
 

    }

