<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;


class PostController extends Controller
{
    //
    public function index()
    {
        return view('blog', [
            "club" => "AS ROMA",
            "posts" => Post::with(['user', 'category'])->latest()->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "post" => $post
        ]);
    }

    public function all()
    {
        $all = Post::all();
        // return dd($all);
        // return view('everypost',[
        //     "post" => $all
        // ]);
        $item = [
            "post" => $all
        ];

        return view('everypost', $item);
    }

    public function edit(Post $post)
    {
        return view('edit', [
            "post" => $post
        ]);
    }

    public function editPost(Request $request, Post $post)
    {
        # code...
        $jost = $post;
        $old = $request;
        $same = $old->name;
        $res = $request['attributes'];
        $tesd = Post::where('id', $post->id)->get();
        Post::where('id', $post->id)
            ->update([
                'title' => $old->title,
                'slug' => $old->slug,
                'body' => $old->body
            ]);
        return redirect()->back()->with('success', 'Data berhasil diubah'); 
    }

    public function add()
    {
        return view('newPost');
    }

    public function checkSlug(Request $request)
    {
        // $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        $slug=Str::slug($request->title, '-'); 
        return response()->json(['slug'=>$slug]);
        // return dd($request);

    }
}
