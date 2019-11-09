<?php

namespace App\Http\Controllers\Timing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Timing\Timing;

class TimingController extends Controller
{
    public function new_timing() {

    	return view('admin.dashboard.timing.new_timing');
    }

    public function add_timing (Request $request) {

    	$request->validate([
	        'name'      => 'bail|required',
	    ],
		[
	        'name.required' => 'The name is required',
	    ]);

    	$timing = new Timing;

    	if (!empty($request->input('from_time')) && !empty($request->input('to_time'))) {
    		
    		$timing->name     = ucwords(strtolower($request->input('name')));
	        $timing->fromTime = $request->input('from_time');
			$timing->toTime   = $request->input('to_time');
	        $timing->id       = $timing->count() + 1;
    	} else {

    		$timing->name     = ucwords(strtolower($request->input('name')));
        	$timing->id       = $timing->count() + 1;
    	}

        if($timing->save()) {

            return redirect()->route('new_timing')->with('msg', 'Timing has been added successfully');
        }
        else
            return redirect()->route('new_timing')->with('msg', 'Something wrong while adding');
    }

    public function all_timing() {

        $timing = new Timing;

        $timing_data = $timing->all();

        return view('admin.dashboard.timing.all_timing' , ['data' => $timing_data]);
    }

    public function single_record_timing ($timeId) {

        $timing = new Timing;

        $timing_data = $timing->find($timeId);

        return view('admin.dashboard.timing.single_record_timing' , ['data' => $timing_data]);
    }

    public function edit_timing(Request $request, $timeId) {

        $request->validate([
	        'name'      => 'bail|required',
	    ],
		[
	        'name.required' => 'The name is required',
	    ]);

    	$timing = new Timing;

    	if ($request->has('from_time') && $request->has('to_time')) {

	        $timing->where('id', $timeId)->update(['name' => ucwords(strtolower($request->input('name'))), 'fromTime' => $request->input('from_time'), 'toTime' => $request->input('to_time')]);

    	} else {

    		$timing->where('id', $timeId)->update(['name' => ucwords(strtolower($request->input('name')))]);
    	}

        $timing_data = $timing->find($timeId);

        return view('admin.dashboard.timing.single_record_timing' , ['data' => $timing_data, 'msg' => "Time has been updated"]);
    }
}
