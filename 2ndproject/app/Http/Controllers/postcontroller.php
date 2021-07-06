<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\comment;

class postcontroller extends Controller
{
    public function addpost()
    {
        $post=new post();
        $post->title="second title";
        $post->body="second post description";
        $post->save();
        return "post hasbeen created successfully!";
    }
    public function addcomment($id)
    {
        $post=post::find($id);
        $comment=new comment();
        $comment->comment="this is first comment";
        $post->comments()->save($comment);
        return "comment has been posted";
    }
    public function getcommentsBypost($id)
    {
        $comments=post::find($id)->comments;
        return $comments;
    }


    }