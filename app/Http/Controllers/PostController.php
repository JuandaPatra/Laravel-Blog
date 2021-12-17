<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index(){
        return view('blog',[
            "club" => "AS ROMA",
            "posts" => Post::with(['user', 'category'])->latest()->get()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            "post" =>$post
        ]);
    }
}
