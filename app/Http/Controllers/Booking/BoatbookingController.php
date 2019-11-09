<?php

namespace App\Http\Controllers\Booking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Boat\Boat;
use DB;

class BoatbookingController extends Controller
{
    public function new_boat_booking() {

    	return view('admin.dashboard.boat_booking.new_boat_booking');
    }

    public function accept_boat_booking() {

    	return view('admin.dashboard.boat_booking.accept_boat_booking');
    }

    public function cancel_boat_booking() {

    	return view('admin.dashboard.boat_booking.cancel_boat_booking');
    }

    public function boat_booking_data(Request $request) {

        $boatbooking = new Boat;

        $columns = array( 
                            0 => 'id', 
                            1 => 'personName',
                            2 => 'contactNo',
                            3 => 'email',
                            4 => 'totalPersons',
                            5 => 'mealPlan',
                            6 => 'checkInDate',
                            7 => 'checkOutDate',
                            8 => 'bookingDate',
                            9 => 'action',
                        );

        $totalData = $boatbooking->where('bookingStatus', $request->input('status'))->count();

        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir   = $request->input('order.0.dir');

        if(empty($request->input('search.value'))) {            
            
            $booking_data = DB::table('boat')
                            ->where('boat.bookingStatus', $request->input('status'))
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy('boat.'.$order,$dir)
                            ->get();
        }
        else {

            $search = $request->input('search.value'); 

            $booking_data = DB::table('boat')
                            ->where('boat.bookingStatus', $request->input('status'))
                            ->orWhere('boat.name', 'LIKE',"%{$search}%")
                            ->orWhere('boat.mobileNo', 'LIKE',"%{$search}%")
                            ->orWhere('boat.email', 'LIKE',"%{$search}%")
                            ->orWhere('boat.totalPersons', 'LIKE',"%{$search}%")
                            ->orWhere('boat.mealPlan', 'LIKE',"%{$search}%")
                            ->orWhere('boat.checkIn', 'LIKE',"%{$search}%")
                            ->orWhere('boat.checkOut', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy('jeep_booking.'.$order,$dir)
                            ->get();    

            $totalFiltered = DB::table('boat')
                            ->where('boat.bookingStatus', $request->input('status'))
                            ->orWhere('boat.name', 'LIKE',"%{$search}%")
                            ->orWhere('boat.mobileNo', 'LIKE',"%{$search}%")
                            ->orWhere('boat.email', 'LIKE',"%{$search}%")
                            ->orWhere('boat.totalPersons', 'LIKE',"%{$search}%")
                            ->orWhere('boat.mealPlan', 'LIKE',"%{$search}%")
                            ->orWhere('boat.checkIn', 'LIKE',"%{$search}%")
                            ->orWhere('boat.checkOut', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();

        if(!empty($booking_data)) {

            $cnt = 1;

            foreach ($booking_data as $single_data) {

                $action = "";

                if($single_data->bookingStatus == 1){

                    $action = "<a class=\"btn btn-success\" href=\"".url('/admin/accept_boat_booking_status', ['bookingId' => $single_data->id, 'bookingStatus' => 2])."\">Accept Booking</a>&nbsp;&nbsp;<a href=\"".url('/admin/cancel_boat_booking_status', ['bookingId' => $single_data->id, 'bookingStatus' => 3])."\" class=\"btn btn-danger\">Cancel Booking</a>";
                }
                else if($single_data->bookingStatus == 2){

                    $action = "<a href=\"".url('/admin/cancel_boat_booking_status', ['bookingId' => $single_data->id, 'bookingStatus' => 3])."\" class=\"btn btn-danger\">Cancel Booking</a>";
                }
                else {

                    $action = "Booking has been cancelled";
                }

                $nestedData['id']           = $cnt;
                $nestedData['personName']   = $single_data->name;
                $nestedData['contactNo']    = $single_data->mobileNo;
                $nestedData['email']        = $single_data->email;
                $nestedData['totalPersons'] = $single_data->totalPersons;
                $nestedData['mealPlan']     = $single_data->mealPlan;
                $nestedData['checkInDate']  = $single_data->checkIn;
                $nestedData['checkOutDate'] = $single_data->checkOut;
                $nestedData['bookingDate']  = $single_data->created_at;
                $nestedData['action']       = $action;

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

    public function accept_boat_booking_status($bookingId, $status) {

        $boatbooking  = new Boat;

        $boatbooking->where('id', $bookingId)->update(['bookingStatus' => $status]);

        return view('admin.dashboard.boat_booking.accept_boat_booking');
    }

    public function cancel_boat_booking_status($bookingId, $status) {

        $boatbooking  = new Boat;

        $boatbooking->where('id', $bookingId)->update(['bookingStatus' => $status]);

        return view('admin.dashboard.boat_booking.cancel_boat_booking');
    }
}
