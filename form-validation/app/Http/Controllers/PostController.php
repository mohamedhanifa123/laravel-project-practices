<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Session;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index')->withposts($post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data

        
            $this->validate($request,array(
                'title' => 'required|max:225',
                'slug'  =>'required|alpha_dash|min:5|max:255',
                'body'  => 'required'
            ));
    
                $post = new Post;
    
                $post->title=$request->title;

                $post->slug=$request->slug;
                $post->body=$request->body;
    
                $post->save();
    
                session::flash('success', 'this post was successfully saved');
    
                return redirect()->route('posts.show',$post->id);
    
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::find($id);
        return view('posts.show')->withpost($post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        return view('posts.edit')->withpost($post);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,array(
            'title' => 'required|max:225',
            'body'  => 'required'
        ));

            $post = Post::find($id);

            $post->title=$request->input('title');
            $post->body=$request->input('body');

            $post->save();

            session::flash('success', 'this post was successfully saved');

            return redirect()->route('posts.show',$post->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
