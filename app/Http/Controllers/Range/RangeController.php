<?php

namespace App\Http\Controllers\Range;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Range\Range;

class RangeController extends Controller
{
    public function new_range() {

    	return view('admin.dashboard.range.new_range');
    }

    public function add_range (Request $request) {

    	$request->validate([
	        'range' => 'bail|required',
	    ],
		[
	        'range.required' => 'The range name is required',
	    ]);

    	$range = new Range;

        $row_range = $range->where('range', $request->input('range'))->count();

        if ($row_range > 0) {
            
            return redirect()->route('new_range')->with('msg', 'Record already available.');
        }
        else {

            $range->range = ucwords(strtolower($request->input('range')));
            $range->id    = $range->count() + 1;

            if($range->save()) {

                return redirect()->route('new_range')->with('msg', 'Range has been added successfully');
            }
            else
                return redirect()->route('new_range')->with('msg', 'Something wrong while adding');
        }
    }

    public function all_range () {

        $range = new Range;

        $range_data = $range->all();

        return view('admin.dashboard.range.all_range' , ['data' => $range_data]);
    }

    public function single_record_range($rangeId) {

        $range = new Range;

        $range_data = $range->find($rangeId);

        return view('admin.dashboard.range.single_record_range' , ['data' => $range_data]);
    }

    public function edit_range(Request $request, $rangeId) {

        $request->validate([
            'range' => 'bail|required',
        ],
        [
            'range.required'  => 'The range name is required'
        ]);

        $range = new Range;

        $range->where('id', $rangeId)->update(['range' => $request->input('range')]);

        $range_data = $range->find($rangeId);
        
        return view('admin.dashboard.range.single_record_range' , ['data' => $range_data, 'msg' => 'Record has been updated']);
    }
}
