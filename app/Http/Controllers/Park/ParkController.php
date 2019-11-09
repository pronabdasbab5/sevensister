<?php

namespace App\Http\Controllers\Park;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Park\Park;

class ParkController extends Controller
{
    public function new_park() {

    	return view('admin.dashboard.park.new_park');
    }

    public function add_park (Request $request) {

    	$request->validate([
	        'park' => 'bail|required',
	    ],
		[
	        'park.required' => 'The park name is required',
	    ]);

    	$park = new Park;

        $row_park = $park->where('park', $request->input('park'))->count();

        if ($row_park > 0) {
            
            return redirect()->route('new_park')->with('msg', 'Record already available.');
        }
        else {

            $park->park = ucwords(strtolower($request->input('park')));
            $park->id = $park->count() + 1;

            if($park->save()) {

                return redirect()->route('new_park')->with('msg', 'Park has been added successfully');
            }
            else
                return redirect()->route('new_park')->with('msg', 'Something wrong while adding');
        }
    }

    public function all_park () {

        $park = new Park;

        $park_data = $park->all();

        return view('admin.dashboard.park.all_park' , ['data' => $park_data]);
    }

    public function single_record_park($parkId) {

        $park = new Park;

        $park_data = $park->find($parkId);

        return view('admin.dashboard.park.single_record_park' , ['data' => $park_data]);
    }

    public function edit_park(Request $request, $parkId) {

        $request->validate([
            'park' => 'bail|required',
        ],
        [
            'park.required'  => 'The park name is required'
        ]);

        $park = new Park;

        $park->where('id', $parkId)->update(['park' => $request->input('park')]);

        $park_data = $park->find($parkId);
        
        return view('admin.dashboard.park.single_record_park' , ['data' => $park_data, 'msg' => 'Record has been updated']);
    }
}
