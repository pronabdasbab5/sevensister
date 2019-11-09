<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Blog\Blog;

class BlogController extends Controller
{
    public function single_blog() {

    	$blog = new Blog;

    	$blogData = $blog->where('status', 1)->paginate(6);

    	return view('single_blog', ['blogData' => $blogData]);
    }

    public function blog_details($postId) {

    	$blog = new Blog;

    	$blogData = $blog->where('id', $postId)->get();

    	return view('blog_details', ['blogData' => $blogData]);
    }
}
