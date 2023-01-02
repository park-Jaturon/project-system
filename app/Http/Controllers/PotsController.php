<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PotsController extends Controller
{
    public function indexpost(){
        $post = Post::all();
        return view('BlogPost.posts',compact('post'));
    }

    public function addpots(){
        $data = new  Post();
        return view('BlogPost.addpots',compact('data'));
    }

    public function store(Request $request){
        //dd($request);
        $posts = new Post();
        $posts->p_name = $request->topic;
        $posts-> description = $request->description;
        $posts-> user_id = Auth::user()->id;
        $posts->save();
        return redirect()->back()->with('success','บันทึกข้อมูลเสร็จสิ้น');
    }

    public  function edit($id){
        $data = Post::findOrFail($id);
        //dd($data);
        return view('BlogPost.addpots',compact('data'));
    }

    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->back();
    }
}
