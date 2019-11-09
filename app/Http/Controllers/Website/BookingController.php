<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Park\Park;
use App\model\Jeep\Jeep;
use App\model\Jeep\Jeepbooking;
use App\model\Price\Price;
use App\model\Range\Range;
use App\model\Timing\Timing;
use App\model\Boat\Boat;
use App\model\Package\Packagebooking;
use DB;

class BookingController extends Controller
{
	public function new_k_booking() {

        $range      = new Range;
        $range_data = $range->Join('price', 'range.id', '=', 'price.rangeId')
                            ->select('price.rangeId', 'range.range')
                            ->distinct()
                            ->get();

        $timing      = new Timing;
        $timing_data = $timing->where('fromTime', '!=', '')->where('toTime', '!=', '')->get();

    	return view('safari.kaziranga_jeep_safari', ['rangeData' => $range_data, 'timingData' => $timing_data]);
    }

    public function new_m_booking() {

        $timing      = new Timing;
        $timing_data = $timing->whereNull('fromTime')->whereNull('toTime')->get();

        return view('safari.manas_jeep_safari', ['timingData' => $timing_data]);
    }

    public function add_k_booking(Request $request, $parkId) {

    	$request->validate([
	        'person_name'         => 'bail|required',
	        'person_age'          => 'required|numeric',
	        'person_contact_no'   => 'required|numeric',
	        'persons'             => 'required|numeric',
	        'person_confirm_email'=> 'required',
	        'forest_range'        => 'required|numeric',
	        'nationalityId'       => 'required|numeric',
	        'total_jeep'          => 'required|numeric',
	        'total_price'         => 'required|numeric',
	        'booking_time'        => 'required|numeric',

	    ],
		[
	        'person_name.required'         => 'The name is required',
	        'person_age.required'          => 'The age is required',
	        'person_contact_no.required'   => 'The contact no is required',
	        'persons.required'             => 'The person is required',
	        'person_confirm_email.required'=> 'The email is required',
	        'forest_range.required'        => 'The range is required',
	        'nationalityId.required'       => 'The nationality is required',
	        'total_jeep.required'          => 'The total jeep is required',
	        'total_price.required'         => 'The total price is required',
	        'booking_time.required'        => 'The booking time is required',
	    ]);

    	$jeepbooking = new Jeepbooking;

        $jeepData  = DB::table('jeep')->where('parkId', $parkId)->get();
        $totalJeep = ceil($request->input('persons')/$jeepData[0]->capacity);

        $priceData = DB::table('price')->where('parkId', $parkId)->where('rangeId', $request->input('forest_range'))->where('nationalityId', $request->input('nationalityId'))->get();

        $totalPrice = $priceData[0]->price * $totalJeep;

    	$jeepbooking->orderId      = strtoupper(uniqid('#B'));
    	$jeepbooking->jeepId       = $jeepData[0]->id;
        $jeepbooking->timeId       = $request->input('booking_time');
        $jeepbooking->rangeId      = $request->input('forest_range');
        $jeepbooking->parkId       = $parkId;
        $jeepbooking->totalPrice   = $totalPrice;
        $jeepbooking->nationalityId= $request->input('nationalityId');
        $jeepbooking->orderDate    = date('Y-m-d');
        $jeepbooking->mobileNo     = $request->input('person_contact_no');
        $jeepbooking->totalJeep    = $totalJeep;
        $jeepbooking->email        = $request->input('person_confirm_email');
        $jeepbooking->totalPersons = $request->input('persons');
        $jeepbooking->age          = $request->input('person_age');
        $jeepbooking->personName   = ucwords(strtolower($request->input('person_name')));
        $jeepbooking->bookingStatus= 1;

        if($jeepbooking->save()){

            return redirect()->route('new_k_booking')->with('msg', 'Booking has been done. We wiil get back soon.');

      //       $lastInsertedId = DB::getPdo()->lastInsertId();

      //       $api = new \Instamojo\Instamojo(
	     //        config('services.instamojo.api_key'),
	     //        config('services.instamojo.auth_token'),
	     //        config('services.instamojo.url')
	     //    );
	 
		    // try {
		    //     $response = $api->paymentRequestCreate(array(
		    //         "purpose" => "Booking Price",
		    //         "amount" => $totalPrice,
		    //         "buyer_name" => ucwords(strtolower($request->input('person_name'))),
		    //         "send_email" => true,
		    //         "send_sms" => true,
		    //         "email" => $request->input('person_confirm_email'),
		    //         "phone" => $request->input('person_contact_no'),
		    //         "redirect_url" => "http://127.0.0.1:8000/pay-success/$lastInsertedId"
		    //     ));

		    //     $jeepbooking->where('id', $lastInsertedId)->update(['paymentRequestId' => $response['id'], 'paymentType' => 'Online', 'paymentStatus' => '1']);
		             
		    //     header('Location: ' . $response['longurl']);
		    //     exit();
		    // }catch (Exception $e) {
		    //     print('Error: ' . $e->getMessage());
		    // }
        }
        else
            return redirect()->route('new_k_booking')->with('msg', 'Something wrong while adding');
    }

    public function add_m_booking(Request $request, $parkId) {

        $request->validate([
            'person_name'         => 'bail|required',
            'person_age'          => 'required|numeric',
            'person_contact_no'   => 'required|numeric',
            'persons'             => 'required|numeric',
            'person_confirm_email'=> 'required',
            'nationalityId'       => 'required|numeric',
            'total_jeep'          => 'required|numeric',
            'total_price'         => 'required|numeric',
            'booking_time'        => 'required|numeric',

        ],
        [
            'person_name.required'         => 'The name is required',
            'person_age.required'          => 'The age is required',
            'person_contact_no.required'   => 'The contact no is required',
            'persons.required'             => 'The person is required',
            'person_confirm_email.required'=> 'The email is required',
            'nationalityId.required'       => 'The nationality is required',
            'total_jeep.required'          => 'The total jeep is required',
            'total_price.required'         => 'The total price is required',
            'booking_time.required'        => 'The booking time is required',
        ]);

        $jeepbooking = new Jeepbooking;

        $jeepData  = DB::table('jeep')->where('parkId', $parkId)->get();
        $totalJeep = ceil($request->input('persons')/$jeepData[0]->capacity);

        $priceData = DB::table('price')->where('parkId', $parkId)->where('rangeId', $request->input('forest_range'))->where('nationalityId', $request->input('nationalityId'))->get();

        $totalPrice = $priceData[0]->price * $totalJeep;

        $jeepbooking->orderId      = strtoupper(uniqid('#B'));
        $jeepbooking->jeepId       = $jeepData[0]->id;
        $jeepbooking->timeId       = $request->input('booking_time');
        $jeepbooking->parkId       = $parkId;
        $jeepbooking->totalPrice   = $totalPrice;
        $jeepbooking->nationalityId= $request->input('nationalityId');
        $jeepbooking->orderDate    = date('Y-m-d');
        $jeepbooking->mobileNo     = $request->input('person_contact_no');
        $jeepbooking->totalJeep    = $totalJeep;
        $jeepbooking->email        = $request->input('person_confirm_email');
        $jeepbooking->totalPersons = $request->input('persons');
        $jeepbooking->age          = $request->input('person_age');
        $jeepbooking->personName   = ucwords(strtolower($request->input('person_name')));
        $jeepbooking->bookingStatus= 1;

        if($jeepbooking->save()){

            return redirect()->route('new_m_booking')->with('msg', 'Booking has been done. We will get back soon.');

            // $lastInsertedId = DB::getPdo()->lastInsertId();

            // $api = new \Instamojo\Instamojo(
            //     config('services.instamojo.api_key'),
            //     config('services.instamojo.auth_token'),
            //     config('services.instamojo.url')
            // );
     
            // try {
            //     $response = $api->paymentRequestCreate(array(
            //         "purpose" => "Booking Price",
            //         "amount" => $totalPrice,
            //         "buyer_name" => ucwords(strtolower($request->input('person_name'))),
            //         "send_email" => true,
            //         "send_sms" => true,
            //         "email" => $request->input('person_confirm_email'),
            //         "phone" => $request->input('person_contact_no'),
            //         "redirect_url" => "http://127.0.0.1:8000/pay-msuccess/$lastInsertedId"
            //     ));

            //     $jeepbooking->where('id', $lastInsertedId)->update(['paymentRequestId' => $response['id'], 'paymentType' => 'Online', 'paymentStatus' => '1']);
                     
            //     header('Location: ' . $response['longurl']);
            //     exit();
            // }catch (Exception $e) {
            //     print('Error: ' . $e->getMessage());
            // }
        }
        else
            return redirect()->route('new_m_booking')->with('msg', 'Something wrong while adding');
    }

    public function success(Request $request, $lastInsertedId){

    	$jeepbooking = new Jeepbooking;

     	try {
 
        	$api = new \Instamojo\Instamojo(
            	config('services.instamojo.api_key'),
            	config('services.instamojo.auth_token'),
            	config('services.instamojo.url')
        	);
 
        	$response = $api->paymentRequestStatus(request('payment_request_id'));
 
        	if( !isset($response['payments'][0]['status']) ) {
           		return redirect()->route('new_k_booking')->with('msg', 'Payment Failed');
        	} else if($response['payments'][0]['status'] != 'Credit') {
            	return redirect()->route('new_k_booking')->with('msg', 'Payment Failed');
        	} 
      	}catch (\Exception $e) {
         	return redirect()->route('new_k_booking')->with('msg', 'Payment Failed');
    	}

    	if($response['payments'][0]['status'] == 'Credit') {

    		$jeepbooking->where('id', $lastInsertedId)->update(['paymentId' => $response['payments'][0]['payment_id'], 'paymentStatus' => '2']);

           	return redirect()->route('new_k_booking')->with('msg', 'Payment has been done and Booking has been placed');
       	} 
  	}

    public function msuccess(Request $request, $lastInsertedId){

        $jeepbooking = new Jeepbooking;

        try {
 
            $api = new \Instamojo\Instamojo(
                config('services.instamojo.api_key'),
                config('services.instamojo.auth_token'),
                config('services.instamojo.url')
            );
 
            $response = $api->paymentRequestStatus(request('payment_request_id'));
 
            if( !isset($response['payments'][0]['status']) ) {
                return redirect()->route('new_m_booking')->with('msg', 'Payment Failed');
            } else if($response['payments'][0]['status'] != 'Credit') {
                return redirect()->route('new_m_booking')->with('msg', 'Payment Failed');
            } 
        }catch (\Exception $e) {
            return redirect()->route('new_m_booking')->with('msg', 'Payment Failed');
        }

        if($response['payments'][0]['status'] == 'Credit') {

            $jeepbooking->where('id', $lastInsertedId)->update(['paymentId' => $response['payments'][0]['payment_id'], 'paymentStatus' => '2']);

            return redirect()->route('new_m_booking')->with('msg', 'Payment has been done and Booking has been placed');
        } 
    }

    public function add_booking(Request $request) {

        if (!empty($request->input('forest_range'))) {
            
            $request->validate([
                'parkId'              => 'bail|required',
                'person_name'         => 'required',
                'person_age'          => 'required|numeric',
                'person_contact_no'   => 'required|numeric',
                'persons'             => 'required|numeric',
                'person_confirm_email'=> 'required',
                'forest_range'        => 'required|numeric',
                'nationalityId'       => 'required|numeric',
                'total_jeep'          => 'required|numeric',
                'total_price'         => 'required|numeric',
                'booking_time'        => 'required|numeric',

            ],
            [
                'parkId.required'              => 'The park is required',
                'person_name.required'         => 'The name is required',
                'person_age.required'          => 'The age is required',
                'person_contact_no.required'   => 'The contact no is required',
                'persons.required'             => 'The person is required',
                'person_confirm_email.required'=> 'The email is required',
                'forest_range.required'        => 'The range is required',
                'nationalityId.required'       => 'The nationality is required',
                'total_jeep.required'          => 'The total jeep is required',
                'total_price.required'         => 'The total price is required',
                'booking_time.required'        => 'The booking time is required',
            ]);
        } else {

            $request->validate([
                'parkId'              => 'bail|required',
                'person_name'         => 'required',
                'person_age'          => 'required|numeric',
                'person_contact_no'   => 'required|numeric',
                'persons'             => 'required|numeric',
                'person_confirm_email'=> 'required',
                'nationalityId'       => 'required|numeric',
                'total_jeep'          => 'required|numeric',
                'total_price'         => 'required|numeric',
                'booking_time'        => 'required|numeric',

            ],
            [
                'parkId.required'              => 'The park is required',
                'person_name.required'         => 'The name is required',
                'person_age.required'          => 'The age is required',
                'person_contact_no.required'   => 'The contact no is required',
                'persons.required'             => 'The person is required',
                'person_confirm_email.required'=> 'The email is required',
                'nationalityId.required'       => 'The nationality is required',
                'total_jeep.required'          => 'The total jeep is required',
                'total_price.required'         => 'The total price is required',
                'booking_time.required'        => 'The booking time is required',
            ]);
        }

        $jeepbooking = new Jeepbooking;

        $jeepData  = DB::table('jeep')->where('parkId', $request->input('parkId'))->get();
        $totalJeep = ceil($request->input('persons')/$jeepData[0]->capacity);

        $priceData = DB::table('price')->where('parkId', $request->input('parkId'))
                                        ->where('rangeId', $request->input('forest_range'))
                                        ->where('nationalityId', $request->input('nationalityId'))
                                        ->get();

        $totalPrice = $priceData[0]->price * $totalJeep;

        $jeepbooking->orderId      = strtoupper(uniqid('#B'));
        $jeepbooking->jeepId       = $jeepData[0]->id;
        $jeepbooking->timeId       = $request->input('booking_time');
        $jeepbooking->rangeId      = $request->input('forest_range');
        $jeepbooking->parkId       = $request->input('parkId');
        $jeepbooking->totalPrice   = $totalPrice;
        $jeepbooking->nationalityId= $request->input('nationalityId');
        $jeepbooking->orderDate    = date('Y-m-d');
        $jeepbooking->mobileNo     = $request->input('person_contact_no');
        $jeepbooking->totalJeep    = $totalJeep;
        $jeepbooking->email        = $request->input('person_confirm_email');
        $jeepbooking->totalPersons = $request->input('persons');
        $jeepbooking->age          = $request->input('person_age');
        $jeepbooking->personName   = ucwords(strtolower($request->input('person_name')));
        $jeepbooking->bookingStatus= 1;

        if($jeepbooking->save())
           return redirect()->route('index')->with('msg', 'Booking has been done. We will get back soon.'); 
        else
            return redirect()->route('index')->with('msg', 'Something wrong while booking');
    }

    public function add_book_house_boat(Request $request) {

        $request->validate([
            'person_name'   => 'bail|required',
            'mobile_no'     => 'required|numeric',
            'confirm_email' => 'required',
            'total_person'  => 'required|numeric',
            'check_in_date' => 'required',
            'check_out_date'=> 'required',
        ],
        [
            'person_name.required'   => 'The name is required',
            'mobile_no.required'     => 'The contact no is required',
            'confirm_email.required' => 'The email is required',
            'total_person.required'  => 'The total person is required',
            'check_in_date.required' => 'The check in date is required',
            'check_out_date.required'=> 'The check out date is required',
        ]);

        $boat = new Boat;

        $boat->name         = ucwords(strtolower($request->input('person_name')));
        $boat->mobileNo     = $request->input('mobile_no');
        $boat->email        = $request->input('confirm_email');
        $boat->totalPersons = $request->input('total_person');
        $boat->mealPlan     = $request->input('meal_plan');
        $boat->checkIn      = $request->input('check_in_date');
        $boat->checkOut     = $request->input('check_out_date');
        $boat->bookingStatus= 1;

        if($boat->save()){

            return redirect()->route('house_boat')->with('msg', 'Booking has been done. We wiil get back soon.');
        }
        else
            return redirect()->route('house_boat')->with('msg', 'Something wrong while adding');
    }

    public function add_p_booking(Request $request, $packageId) {

        $request->validate([
            'tentative_arrival_date' => 'bail|required',
            'duration'               => 'required|numeric',
            'name'                   => 'required',
            'contact_no'             => 'required|numeric',
            'address'                => 'required',
            'budget'                 => 'required',
            'activities'             => 'required',
            'destination'            => 'required',
        ],
        [
            'tentative_arrival_date.required' => 'The tentative date is required',
            'duration.required'               => 'The duration is required',
            'name.required'                   => 'The your name is required',
            'contact_no.required'             => 'Contact No is required',
            'address.required'                => 'Address is required',
            'budget.required'                 => 'The budget is required',
            'activities.required'             => 'The activities is required',
            'destination.required'            => 'The destination is required'
        ]);

        $packagebooking = new Packagebooking;

        $packagebooking->packageId    = $packageId;
        $packagebooking->personName   = ucwords(strtolower($request->input('name')));
        $packagebooking->contactNo    = $request->input('contact_no');
        $packagebooking->address      = ucwords(strtolower($request->input('address')));
        $packagebooking->days         = $request->input('duration');
        $packagebooking->arrivalDate  = $request->input('tentative_arrival_date');
        $packagebooking->noOfAdult    = $request->input('adult');
        $packagebooking->noOfKids     = $request->input('kids');
        $packagebooking->tourBudget   = $request->input('budget');
        $packagebooking->activities   = $request->input('activities');
        $packagebooking->regions      = $request->input('destination');

        if($packagebooking->save()){

            return redirect()->route('packagedetails', ['packageId' => $packageId])->with('msg', 'Booking has been done. We wiil get back soon.');
        }
        else
            return redirect()->route('packagedetails', ['packageId' => $packageId])->with('msg', 'Something wrong while booking');
    }
}
