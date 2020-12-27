<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use Storage;

class Postcontroller extends Controller
{
    public function add()
    {
        return view('admin.post.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Post::$rules);
        
        $post = new Post;
        $form = $request->all();
        
        if (isset($form['image'])) {
        $path = Storage::disk('s3')->putFile('/',$form['image'],'public');
        $post->image_path = Storage::disk('s3')->url($path);
      } else {
          $post->image_path = null;
      }
      
        unset($form['_token']);
        unset($form['image']);
        
        $post->fill($form)->save();
        
        return redirect('admin/post');
    }
    
    public function index(Request $request)
    {
        $input = $request->input;
        if ($input != '') {
        $posts = Post::where('additive', 'like',"%{$input}%")->paginate(10);
        
        } else {
            //$posts = Post::all()->sortBy('additive');
            $posts = Post::orderBy('hurigana','asc')->paginate(10);
        }
        
        // $posts = Post::when($request->input,function($q, $v){
        //     $qwhere('additive', 'like',"%{$v}%");
        // })->get();

        return view('admin.post.index', ['posts' => $posts, 'input' => $input]);
    }
    
    public function edit(Request $request)
    {
        $post = Post::find($request->id);
        if (empty($post)){
            abort(404);
        }
        
        return view('admin.post.edit', ['form' => $post]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Post::$rules);
        $post = Post::find($request->id);
        $form = $request->all();
        
        if ($request->remove == 'true') {
          $form['image_path'] = null;
      } elseif ($request->file('image')) {
          //$path = $request->file('image')->store('public/image');
          //$form['image_path'] = basename($path);
          $path = Storage::disk('s3')->putFile('/',$form['image'],'public');
          $form['image_path'] = Storage::disk('s3')->url($path);
      } else {
          $form['image_path'] = $post->image_path;
      }

        unset($form['image']);
        unset($form['remove']);
        unset($form['_token']);
        $post->fill($form)->save();
        
        return redirect('admin/post');
    }
    
    public function delete(Request $request)
    {
        $post = Post::find($request->id);
        
        $post->delete();
        return redirect('admin/post');
    }
    
}
