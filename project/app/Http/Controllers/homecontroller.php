<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\post;
use App\Models\comment;

class homecontroller extends Controller
{
    public function index(){

        $post= post::all();
        return view('post.list',['posts'=>$post]);

       // $post= post::all();
      //  return view('post.list',['post'=>$post]);
        
    }

    public function getcomment(){

        $comment=comment::all();
        return view('post.comment',['comments'=>$comment]);
    }

    public function list($id){

        $comment=post::find($id)->getcomment;
    
        return view('post.comment',['comments'=>$comment]);

    }
}


