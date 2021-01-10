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
        \DB::transaction(function(){
                    
            $this->validate($request, Post::$rules);
        
            $post = new Post;
            $form = $request->all();
            
            if (isset($form['image'])) {
            $path = Storage::disk('s3')->putFile('/',$form['image'],'public');
            $post->image_path = Storage::disk('s3')->url($path);
          } else {
              $post->image_path = null;
          }
          
            
            $post->fill($form)->save();
        });

        return redirect('admin/post');
    }
    
    public function index(Request $request)
    {
        $input = $request->input;
        if ($input != '') {
        $posts = Post::where('additive', 'like',"%{$input}%")->paginate(10);
        } else {
            $posts = Post::orderBy('lisk','asc')->paginate(10);
        }

        return view('admin.post.index', compact('posts','input'));
    }
    
    public function edit(Request $request)
    {
        $form = Post::find($request->id);
        if (empty($form)){
            abort(404);
        }
        
        return view('admin.post.edit', compact('form'));
    }
    
    public function update(Request $request)
    {
        \DB::transaction(function(){
                
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
            
            $post->fill($form)->save();
        });
        
        return redirect('admin/post');
    }
    
    public function delete(Request $request)
    {
         \DB::transaction(function(){
            $post = Post::find($request->id);
        
            $post->delete();
         });
        return redirect('admin/post');
    }
    
}
