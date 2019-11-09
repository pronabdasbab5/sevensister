<?php

namespace App\Http\Controllers\Price;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Park\Park;
use App\model\Jeep\Jeep;
use App\model\Price\Price;
use App\model\Range\Range;
use App\model\Timing\Timing;

class PriceController extends Controller
{
    public function new_price() {

    	$park      = new Park;
        $park_data = $park->all();

        $range      = new Range;
        $range_data = $range->all();

        $jeep      = new Jeep;
        $jeep_data = $jeep->all();

        $timing      = new Timing;
        $timing_data = $timing->all();

    	return view('admin.dashboard.price.new_price', ['parkData' => $park_data, 'rangeData' => $range_data, 'jeepData' => $jeep_data, 'timingData' => $timing_data]);
    }

    public function add_price (Request $request) {

    	$request->validate([
	        'parkId'       => 'bail|required|numeric',
	        'price'        => 'required',

	    ],
		[
	        'parkId.required'       => 'The park name is required',
	        'price.required'        => 'The price is required',
	    ]);

    	$price = new Price;

        $price->parkId       = $request->input('parkId');
        $price->rangeId      = $request->input('rangeId');
        if($request->has('timingId'))
            $price->timingId= $request->input('timingId');   
        $price->nationalityId= $request->input('nationalityId');
        $price->price        = $request->input('price');
        $price->id           = $price->count() + 1;

        if($price->save())
            return redirect()->route('new_price')->with('msg', 'Price has been added successfully');
        else
            return redirect()->route('new_price')->with('msg', 'Something wrong while adding');
    }

    public function all_price () {

        $price = new Price;

        $price_data = $price->join('park', 'price.parkId', '=', 'park.id')
        					->leftJoin('range', 'price.rangeId', '=', 'range.id')
        					->leftJoin('timing', 'price.timingId', '=', 'timing.id')
        					->select('park.park', 'range.range', 'timing.name as timingName', 'timing.fromTime', 'timing.toTime', 'price.price', 'price.nationalityId', 'price.id')
        					->get();

        return view('admin.dashboard.price.all_price' , ['data' => $price_data]);
    }

    public function single_record_price ($priceId) {

        $price      = new Price;
        $price_data = $price->find($priceId);

        $park      = new Park;
        $park_data = $park->all();

        $range      = new Range;
        $range_data = $range->all();

        $timing      = new Timing;
        $timing_data = $timing->all();

        return view('admin.dashboard.price.single_record_price' , ['data' => $price_data, 'parkData' => $park_data, 'rangeData' => $range_data, 'timingData' => $timing_data]);
    }

    public function edit_price (Request $request, $priceId) {

        $request->validate([
            'parkId'       => 'bail|required|numeric',
            'price'        => 'required',

        ],
        [
            'parkId.required'       => 'The park name is required',
            'price.required'        => 'The price is required',
        ]);

        $price = new Price;

        if(!empty($request->input('timingId')))
            $priceUpdate = $price->where('id', $priceId)->update(['parkId' => $request->input('parkId'), 'timingId' => $request->input('timingId'), 'nationalityId' => $request->input('nationalityId'), 'price' => $request->input('price')]);

        if(!empty($request->input('rangeId')))
            $priceUpdate = $price->where('id', $priceId)->update(['parkId' => $request->input('parkId'), 'rangeId' => $request->input('rangeId'), 'nationalityId' => $request->input('nationalityId'), 'price' => $request->input('price')]);

        if($priceUpdate){

            //Return to Single Record Price
            $price      = new Price;
            $price_data = $price->find($priceId);

            $park      = new Park;
            $park_data = $park->all();

            $range      = new Range;
            $range_data = $range->all();

            $timing      = new Timing;
            $timing_data = $timing->all();

            return view('admin.dashboard.price.single_record_price' , ['data' => $price_data, 'parkData' => $park_data, 'rangeData' => $range_data, 'timingData' => $timing_data, 'msg' => 'Price has been updated successfully']);
            //End of Single Record Price return
        }
        else {

            //Return to Single Record Price
            $price      = new Price;
            $price_data = $price->find($priceId);

            $park      = new Park;
            $park_data = $park->all();

            $range      = new Range;
            $range_data = $range->all();

            $timing      = new Timing;
            $timing_data = $timing->all();

            return view('admin.dashboard.price.single_record_price' , ['data' => $price_data, 'parkData' => $park_data, 'rangeData' => $range_data, 'timingData' => $timing_data, 'msg' => 'Something wrong while updating']);
            //End of Single Record Price return
        }
    }
}
