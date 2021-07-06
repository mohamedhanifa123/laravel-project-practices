<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\form;
use App\Http\Controllers\homecontroller;

class homecontroller extends Controller
{
    public function home()
    {
        return view('about');
    }


    public function getAllPost()
    {

        $posts=DB::table('posts')->get();
        return view('posts',compact('posts'));
    }

    public function addpostsubmit(Request $request)
    {
        DB::table('posts')->insert([
            'tittle'=>$request->tittle,
            'body'=>$request->body
        ]);
        return back()->with('post_created','post has been created successfully!');
    }

    public function addform(Request $req)
    {
        $member=new form;
        $member->name=$req->name;
        $member->age=$req->age;
        $member->mobile=$req->mobile;
        $member->password=$req->password;
        $member->save();
        return redirect('list');

    }

    public function show()

    {
        $data=form::all();
        return view('list',['members'=>$data]);
    }
    public function delete($id)
    {
        $data=form::find($id);
        $data->delete();
        return redirect('list');
    }
    public function showdata($id)
    {
        $data=form::find($id);
        return view('edit',['data'=>$data]);
    }

    public function update(Request $req)
    {
        $data=form::find($req->id);
        $data->name=$req->name;
        $data->age=$req->age;
        $data->mobile=$req->mobile;
        $data->save();
        return redirect('list');
    }
}

