<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
            
    protected $fillable = [
        'additive', 
        'hurigana',
        'purpose',
        'dangerous',
        'example',
        'comment',        
        'lisk',
        'image_path',
    ];
            
    public static $rules = [
        'additive' => 'required',
        'hurigana' => 'required',
        'purpose' => 'required',
        'dangerous' => 'required',
        'example' => 'required',
        'comment' => 'required',
        'lisk' => 'required',
    ];
}
