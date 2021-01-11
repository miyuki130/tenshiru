<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $input = $request->input;

        $posts = Post::query()
            ->when($input,function($query, $value){
                $query->where('additive', 'like',"%{$value}%");
            })
            ->orderBy('lisk','asc')
            ->orderBy('id','asc')
            ->paginate(10);
        
        return view('post.index', compact('posts','input'));
    }
    
    public function show(Request $request)
    {
        $post = Post::find($request->id);
        
        return view('post.show',compact('post'));
    }
    
    public function about(Request $request)
    {
        return view('post.about');
    }
}
