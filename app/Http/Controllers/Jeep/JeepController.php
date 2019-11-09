<?php

namespace App\Http\Controllers\Jeep;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Park\Park;
use App\model\Jeep\Jeep;

class JeepController extends Controller
{
    public function new_jeep() {

    	$park = new Park;

        $park_data = $park->all();

    	return view('admin.dashboard.jeep.new_jeep', ['data' => $park_data]);
    }

    public function add_jeep (Request $request) {

    	$request->validate([
	        'parkId'   => 'bail|required|numeric',
			'capacity' => 'required|numeric',

	    ],
		[
	        'parkId.required'   => 'The park name is required',
	        'capacity.required' => 'The capacity is required and also be number',
	    ]);

    	$jeep = new Jeep;

        $row_jeep = $jeep->where('parkId', $request->input('parkId'))->count();

        if ($row_jeep > 0) {
            
            return redirect()->route('new_jeep')->with('msg', 'Record already available.');
        }
        else {

            $jeep->capacity = $request->input('capacity');
            $jeep->parkId   = $request->input('parkId');
            $jeep->id       = $jeep->count() + 1;

            if($jeep->save()) {

                return redirect()->route('new_jeep')->with('msg', 'Jeep has been added successfully');
            }
            else
                return redirect()->route('new_jeep')->with('msg', 'Something wrong while adding');
        }
    }

    public function all_jeep () {

        $jeep = new Jeep;

        $jeep_data = $jeep->join('park', 'jeep.parkId', '=', 'park.id')
        			->select('park.park', 'jeep.id', 'jeep.parkId', 'jeep.capacity')
        			->get();

        return view('admin.dashboard.jeep.all_jeep' , ['data' => $jeep_data]);
    }

    public function single_record_jeep ($jeepId) {

        $jeep      = new Jeep;
        $jeep_data = $jeep->find($jeepId);

        $park      = new Park;
        $park_data = $park->all();

        return view('admin.dashboard.jeep.single_record_jeep' , ['data' => $jeep_data, 'parkData' => $park_data]);
    }

    public function edit_jeep (Request $request, $jeepId) {

        $request->validate([
	        'parkId'   => 'bail|required|numeric',
			'capacity' => 'required|numeric',

	    ],
		[
	        'parkId.required'   => 'The park name is required',
	        'capacity.required' => 'The capacity is required and also be number',
	    ]);

    	$jeep = new Jeep;

    	$jeep->where('id', $jeepId)
            ->update(['parkId' => $request->input('parkId'), 'capacity' => $request->input('capacity')]);

        $jeep_data = $jeep->find($jeepId);

        $park      = new Park;
        $park_data = $park->all();

        return view('admin.dashboard.jeep.single_record_jeep' , ['data' => $jeep_data, 'parkData' => $park_data, 'msg' => 'Record has been updated successfully']);
    }
}
