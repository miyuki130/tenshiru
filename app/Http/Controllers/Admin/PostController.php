<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class Postcontroller extends Controller
{
    public function create()
    {
        return view('admin.post.create');
    }
    
    public function post(Request $request)
    {
        $this->validate($request, Post::$rules);
        
        $post = new Post;
        $form = $request->all();
        
        if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $post->image_path = basename($path);
      } else {
          $post->image_path = null;
      }
      
        unset($form['_token']);
        unset($form['image']);
        
        $post->fill($form);
        $post->save();
        
        return redirect('admin/post');
    }
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = Post::where('title', $cond_title)->get();
        } else {
            $posts = Post::all();
        }
        return view('admin.post.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
}
