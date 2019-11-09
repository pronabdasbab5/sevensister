<?php

namespace App\Http\Controllers\Youtube;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Youtube\Youtube;

class YoutubeController extends Controller
{
    public function new_video() {

    	return view('admin.dashboard.youtube.new_video');
    }

    public function add_video (Request $request) {

    	$request->validate([
	        'video_id' => 'bail|required',
	    ],
		[
	        'video_id.required' => 'The video id is required',
	    ]);

    	$youtube = new Youtube;

        $row_youtube = $youtube->where('youtubeId', $request->input('video_id'))->count();

        if ($row_youtube > 0) {
            
            return redirect()->route('new_video')->with('msg', 'Record already available.');
        }
        else {

            $youtube->youtubeId = $request->input('video_id');
            $youtube->id        = $youtube->count() + 1;

            if($youtube->save()) {

                return redirect()->route('new_video')->with('msg', 'Video has been added successfully');
            }
            else
                return redirect()->route('new_video')->with('msg', 'Something wrong while adding');
        }
    }

    public function all_video () {

        $youtube = new Youtube;

        $youtube_data = $youtube->all();

        return view('admin.dashboard.youtube.all_video' , ['data' => $youtube_data]);
    }

    public function remove_video ($videId) {

        $youtube = new Youtube;

        $youtube->where('id', $videId)->delete();

        $youtube_data = $youtube->all();

        return view('admin.dashboard.youtube.all_video' , ['data' => $youtube_data]);
    }
}
