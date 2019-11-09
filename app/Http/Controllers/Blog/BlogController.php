<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Blog\Blog;
use Intervention\Image\ImageManagerStatic as Image;
use File;
use DB;
use Response;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function new_post() {

    	return view('admin.dashboard.blog.new_post');
    }

    public function add_post(Request $request) {

    	$request->validate([
    		'post_title'   => 'required',
	        'upload_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'post_desc'    => 'required',
	    ],
		[
	        'post_title.required'   => 'Please ! Enter post title',
            'upload_image.required' => 'Please ! Upload a valid image.',
            'post_desc.required'    => 'Please ! Enter post description',
	    ]);

    	$blog = new Blog;

        if($request->hasFile('upload_image')) {

            $image        = $request->file('upload_image');
            $file_name    = time().".jpg";

            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(350, 200);

            if(!File::exists(public_path()."/assets"))
                File::makeDirectory(public_path()."/assets");

            $image_resize->save(public_path("assets/".$file_name));

            $blog->blogTitle = ucwords(strtolower($request->input('post_title')));
            $blog->blogImg   = $file_name;
            $blog->desc      = $request->input('post_desc');
            $blog->id        = $blog->count() + 1;

            if($blog->save()) 
                return redirect()->route('new_post')->with('msg', 'Post has been publish successfully');
            else
                 return redirect()->route('new_post')->with('msg', 'Something wrong while publishing'); 

        } else
            return redirect()->route('new_post')->with('msg', 'Please ! upload image.');  
    }

    public function all_post () {

        return view('admin.dashboard.blog.all_post');
    }

    public function post_data(Request $request) {

        $post = new Blog;

        $columns = array( 
                            0 => 'id', 
                            1 => 'postTitle',
                            2 => 'postImg',
                            3 => 'desc',
                            4 => 'postDate',
                            5 => 'action',
                        );

        $totalData = $post->count();

        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir   = $request->input('order.0.dir');

        if(empty($request->input('search.value'))) {            
            
            $post_data = DB::table('blog')
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy('blog.'.$order,$dir)
                            ->get();
        }
        else {

            $search = $request->input('search.value'); 

            $post_data = DB::table('blog')
                            ->where('blog.blogTitle', 'LIKE',"%{$search}%")
                            ->orWhere('blog.desc', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy('blog.'.$order,$dir)
                            ->get();    

            $totalFiltered = DB::table('blog')
                            ->where('blog.blogTitle', 'LIKE',"%{$search}%")
                            ->orWhere('blog.desc', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();

        if(!empty($post_data)) {

            $cnt = 1;

            foreach ($post_data as $single_data) {

                $action = "";

                if($single_data->status == 1){

                    $action = "<a href=\"".url('/admin/unpublish_publish_status', ['postId' => $single_data->id, 'status' => 2])."\" class=\"btn btn-danger\">Unpublish</a>&nbsp;&nbsp;<a href=\"".route('edit_post', ['postId' => $single_data->id])."\" class=\"btn btn-success\">Edit</a>&nbsp;&nbsp;<a href=\"".route('delete_post', ['postId' => $single_data->id])."\" class=\"btn btn-danger\">Delete</a>";
                }
                else {

                    $action = "<a href=\"".url('/admin/unpublish_publish_status', ['postId' => $single_data->id, 'status' => 1])."\" class=\"btn btn-danger\">Publish</a>&nbsp;&nbsp;<a href=\"".route('edit_post', ['postId' => $single_data->id])."\" class=\"btn btn-success\">Edit</a>&nbsp;&nbsp;<a href=\"".route('delete_post', ['postId' => $single_data->id])."\" class=\"btn btn-danger\">Delete</a>";
                }

                $img ="<img src=\"".route('post_images', ['postImg' => $single_data->blogImg])."\" style=\"height: 90px; width: auto;\">";

                $nestedData['id']        = $cnt;
                $nestedData['postTitle'] = $single_data->blogTitle;
                $nestedData['postImg']   = $img;
                $nestedData['desc']      = substr($single_data->desc, 0, 150);
                $nestedData['postDate']  = $single_data->created_at;
                $nestedData['action']    = $action;

                $data[] = $nestedData;

                $cnt++;
            }
        }

        $json_data = array(
                        "draw"            => intval($request->input('draw')),  
                        "recordsTotal"    => intval($totalData),  
                        "recordsFiltered" => intval($totalFiltered), 
                        "data"            => $data   
                    );
            
        print json_encode($json_data); 
    }

    public function unpublish_publish_status($postId, $status) {

        $blog  = new Blog;

        $blog->where('id', $postId)->update(['status' => $status]);

        return view('admin.dashboard.blog.all_post');
    }
    
    public function post_images ($filename) {

        $path = public_path('assets/'.$filename);

        if (!File::exists($path)) {

            $response = 404;
        }

        $file = File::get($path);

        $type = File::extension($path);

        $response = Response::make($file, 200);

        $response->header("Content-Type", $type);

        return $response;
    }

    public function delete_post ($postId) {

    	$blog = new Blog;

    	$blog->where('id', $postId)->delete();

        return view('admin.dashboard.blog.all_post');
    }
    
    public function upload(Request $request)
    {
        if($request->hasFile('upload')) {
            
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName.'_'.time().'.'.$extension;
        
            $request->file('upload')->move(public_path('images'), $fileName);
   
            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/'.$fileName); 
            $msg = 'Image uploaded successfully'; 
            
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
               
            @header('Content-type: text/html; charset=utf-8'); 
            echo $response;
        }
    }
    
    public function editPostForm ($postId) {
        $blog     = new Blog;
        $blogData = $blog->find($postId);

        return view('admin.dashboard.blog.edit_post', ['blogData' => $blogData]);
    }

    public function updatePost (Request $request, $postId) {

        $request->validate([
            'post_title'   => 'required',
            'post_desc'    => 'required',
        ],
        [
            'post_title.required'   => 'Please ! Enter post title',
            'post_desc.required'    => 'Please ! Enter post description',
        ]);

        $blog = new Blog;

        if($request->hasFile('upload_image')) {

            $blogData = $blog->find($postId);

            unlink(public_path("assets/".$blogData->blogImg));

            $image     = $request->file('upload_image');
            $file_name = time().".jpg";

            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(350, 200);

            if(!File::exists(public_path()."/assets"))
                File::makeDirectory(public_path()."/assets");

            $image_resize->save(public_path("assets/".$file_name));

            $blog->where('id', $postId)
                ->update([
                    'blogTitle' => ucwords(strtolower($request->input('post_title'))),
                    'blogImg'  => $file_name,
                    'desc'      => $request->input('post_desc')
                ]);

            return redirect()->route('edit_post', ['postId' => $postId])->with('msg', 'Blog has been updated successfully.');

        } else {

            $blog->where('id', $postId)
                ->update([
                    'blogTitle' => ucwords(strtolower($request->input('post_title'))),
                    'desc'      => $request->input('post_desc')
                ]);

            return redirect()->route('edit_post', ['postId' => $postId])->with('msg', 'Blog has been updated successfully.');
        }
    }
}
