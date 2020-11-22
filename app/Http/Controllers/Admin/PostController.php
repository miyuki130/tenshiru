<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Postcontroller extends Controller
{
    public function create()
    {
        return view('admin.post.create');
    }
    
    public function post(Request $request)
    {
        return redirect('admin/post/create');
    }
    
}
