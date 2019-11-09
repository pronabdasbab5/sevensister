<?php

namespace App\model\Blog;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    protected $fillable = ['blogTitle', 'blogImg', 'desc', 'status'];
}
