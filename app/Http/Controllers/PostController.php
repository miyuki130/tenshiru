<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $input = $request->input;
        if ($input != '') {
        $posts = Post::where('additive', 'like',"%{$input}%")->paginate(10);
        } else {
            //$posts = Post::all()->sortBy('additive');
            $posts = Post::sortBy('hurigana')->paginate(10);
        }
        
        return view('post.index',['posts' => $posts,'input' => $input]);
    }
    
    public function show(Request $request)
    {
        $post = Post::find($request->id);
        
        return view('post.show',['post' => $post]);
    }
    
    public function about(Request $request)
    {
        return view('post.about');
    }
}
