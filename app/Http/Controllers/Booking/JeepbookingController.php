<?php

namespace App\Http\Controllers\Booking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Park\Park;
use App\model\Jeep\Jeep;
use App\model\Jeep\Jeepbooking;
use App\model\Price\Price;
use App\model\Range\Range;
use App\model\Timing\Timing;
use DB;

class JeepbookingController extends Controller
{
    public function new_jeep_booking() {

    	return view('admin.dashboard.jeep_booking.new_jeep_booking');
    }

    public function jeep_booking_data(Request $request) {

        $park        = new Park;
        $jeep        = new Jeep;
        $jeepbooking = new Jeepbooking;
        $price       = new Price;
        $range       = new Range;
        $timing      = new Timing;

        $columns = array( 
                            0 => 'id', 
                            1 => 'parkId',
                            2 => 'personName',
                            3 => 'contactNo',
                            4 => 'email',
                            5 => 'nationality',
                            6 => 'totalPrice',
                            7 => 'totalPersons',
                            8 => 'jeepCapacity',
                            9 => 'totalJeep',
                            10=> 'timing',
                            11=> 'bookingDate',
                            12=> 'action',
                        );

        $totalData = $jeepbooking->where('bookingStatus', $request->input('status'))->count();

        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir   = $request->input('order.0.dir');

        if(empty($request->input('search.value'))) {            
            
            $booking_data = DB::table('jeep_booking')
                            ->where('jeep_booking.bookingStatus', $request->input('status'))
                            ->join('jeep', 'jeep_booking.jeepId', '=', 'jeep.id')
                            ->join('timing', 'jeep_booking.timeId', '=', 'timing.id')
                            ->join('park', 'jeep_booking.parkId', '=', 'park.id')
                            ->select('park.park', 'jeep_booking.personName', 'jeep_booking.mobileNo', 'jeep_booking.email', 'jeep_booking.nationalityId', 'jeep_booking.totalPrice', 'jeep_booking.totalPersons', 'jeep.capacity', 'timing.name', 'jeep_booking.totalJeep', 'jeep_booking.bookingStatus', 'jeep_booking.orderDate', 'timing.fromTime', 'timing.toTime', 'jeep_booking.id')
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy('jeep_booking.'.$order,$dir)
                            ->get();
        }
        else {

            $search = $request->input('search.value'); 

            $booking_data = DB::table('jeep_booking')
                            ->where('jeep_booking.bookingStatus', $request->input('status'))
                            ->join('jeep', 'jeep_booking.jeepId', '=', 'jeep.id')
                            ->join('timing', 'jeep_booking.timeId', '=', 'timing.id')
                            ->join('park', 'jeep_booking.parkId', '=', 'park.id')
                            ->select('park.park', 'jeep_booking.personName', 'jeep_booking.mobileNo', 'jeep_booking.email', 'jeep_booking.nationalityId', 'jeep_booking.totalPrice', 'jeep_booking.totalPersons', 'jeep.capacity', 'timing.name', 'jeep_booking.totalJeep', 'jeep_booking.bookingStatus', 'jeep_booking.orderDate', 'timing.fromTime', 'timing.toTime', 'jeep_booking.id')
                            ->where('park.park','LIKE',"%{$search}%")
                            ->orWhere('jeep_booking.personName', 'LIKE',"%{$search}%")
                            ->orWhere('jeep_booking.mobileNo', 'LIKE',"%{$search}%")
                            ->orWhere('jeep_booking.email', 'LIKE',"%{$search}%")
                            ->orWhere('jeep_booking.totalPrice', 'LIKE',"%{$search}%")
                            ->orWhere('jeep_booking.totalPersons', 'LIKE',"%{$search}%")
                            ->orWhere('jeep.capacity', 'LIKE',"%{$search}%")
                            ->orWhere('timing.name', 'LIKE',"%{$search}%")
                            ->orWhere('jeep_booking.totalJeep', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy('jeep_booking.'.$order,$dir)
                            ->get();    

            $totalFiltered = DB::table('jeep_booking')
                            ->where('jeep_booking.bookingStatus', $request->input('status'))
                            ->join('jeep', 'jeep_booking.jeepId', '=', 'jeep.id')
                            ->join('timing', 'jeep_booking.timeId', '=', 'timing.id')
                            ->join('park', 'jeep_booking.parkId', '=', 'park.id')
                            ->select('park.park', 'jeep_booking.personName', 'jeep_booking.mobileNo', 'jeep_booking.email', 'jeep_booking.nationalityId', 'jeep_booking.totalPrice', 'jeep_booking.totalPersons', 'jeep.capacity', ' timing.name', 'jeep_booking.totalJeep', 'jeep_booking.bookingStatus', 'jeep_booking.orderDate', 'timing.fromTime', 'timing.toTime', 'jeep_booking.id')
                            ->where('park.park','LIKE',"%{$search}%")
                            ->orWhere('jeep_booking.personName', 'LIKE',"%{$search}%")
                            ->orWhere('jeep_booking.mobileNo', 'LIKE',"%{$search}%")
                            ->orWhere('jeep_booking.email', 'LIKE',"%{$search}%")
                            ->orWhere('jeep_booking.totalPrice', 'LIKE',"%{$search}%")
                            ->orWhere('jeep_booking.totalPersons', 'LIKE',"%{$search}%")
                            ->orWhere('jeep.capacity', 'LIKE',"%{$search}%")
                            ->orWhere('timing.name', 'LIKE',"%{$search}%")
                            ->orWhere('jeep_booking.totalJeep', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();

        if(!empty($booking_data)) {

            $cnt = 1;

            foreach ($booking_data as $single_data) {

                $action = "";

                if($single_data->bookingStatus == 1){

                    $action = "<a href=\"".url('/admin/jeep_booking_invoice', ['bookingId' => $single_data->id])."\" class=\"btn btn-primary\" target=\"_blank\">View Details</a>&nbsp;&nbsp;<a class=\"btn btn-success\" href=\"".url('/admin/complete_jeep_booking_status', ['bookingId' => $single_data->id, 'bookingStatus' => 2])."\">Complete Booking</a>&nbsp;&nbsp;<a href=\"".url('/admin/cancel_jeep_booking_status', ['bookingId' => $single_data->id, 'bookingStatus' => 3])."\" class=\"btn btn-danger\">Cancel Booking</a>";
                }
                else if($single_data->bookingStatus == 2){

                    $action = "<a href=\"".url('/admin/jeep_booking_invoice', ['bookingId' => $single_data->id])."\" class=\"btn btn-primary\" target=\"_blank\">View Details</a>";
                }
                else {

                    $action = "<a href=\"".url('/admin/jeep_booking_invoice', ['bookingId' => $single_data->id])."\" class=\"btn btn-primary\" target=\"_blank\">View Details</a>";
                }

                if ($single_data->nationalityId == 1) {
                    $nationality = "Indian";
                } else {
                    $nationality = "Foreigner";
                }

                if (!empty($single_data->fromTime) && !empty($single_data->toTime))
                    $timingName = $single_data->name." (".$single_data->fromTime." - ".$single_data->toTime.")";
                else
                    $timingName = $single_data->name;

                $nestedData['id']           = $cnt;
                $nestedData['parkId']       = $single_data->park;
                $nestedData['personName']   = $single_data->personName;
                $nestedData['contactNo']    = $single_data->mobileNo;
                $nestedData['email']        = $single_data->email;
                $nestedData['nationality']  = $nationality;
                $nestedData['totalPrice']   = $single_data->totalPrice;
                $nestedData['totalPersons'] = $single_data->totalPersons;
                $nestedData['jeepCapacity'] = $single_data->capacity;
                $nestedData['totalJeep']    = $single_data->totalJeep;
                $nestedData['timing']       = $timingName;
                $nestedData['bookingDate']  = $single_data->orderDate;
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

    public function jeep_booking_invoice($bookingId) {

        $bookingData = DB::table('jeep_booking')
                            ->where('jeep_booking.id', $bookingId)
                            ->join('jeep', 'jeep_booking.jeepId', '=', 'jeep.id')
                            ->join('timing', 'jeep_booking.timeId', '=', 'timing.id')
                            ->join('park', 'jeep_booking.parkId', '=', 'park.id')
                            ->leftJoin('range', 'jeep_booking.rangeId', '=', 'range.id')
                            ->select('park.park', 'jeep_booking.personName', 'jeep_booking.mobileNo', 'jeep_booking.email', 'jeep_booking.nationalityId', 'jeep_booking.totalPrice', 'jeep_booking.totalPersons', 'timing.name', 'jeep_booking.totalJeep', 'jeep_booking.bookingStatus', 'jeep_booking.orderDate', 'timing.fromTime', 'timing.toTime', 'jeep_booking.id', 'jeep_booking.orderId', 'range.range', 'jeep_booking.age', 'jeep_booking.bookingStatus', 'jeep.capacity')
                            ->get();

        return view('admin.dashboard.jeep_booking.jeep_booking_invoice', ['bookingData' => $bookingData]);
    }

    public function complete_jeep_booking_status($bookingId, $status) {

        $jeepbooking  = new Jeepbooking;

        $jeepbooking->where('id', $bookingId)->update(['bookingStatus' => $status]);

        return view('admin.dashboard.jeep_booking.complete_jeep_booking');
    }

    public function cancel_jeep_booking_status($bookingId, $status) {

        $jeepbooking  = new Jeepbooking;

        $jeepbooking->where('id', $bookingId)->update(['bookingStatus' => $status]);

        return view('admin.dashboard.jeep_booking.cancel_jeep_booking');
    }

    public function complete_jeep_booking() {

        return view('admin.dashboard.jeep_booking.complete_jeep_booking');
    }

    public function cancel_jeep_booking() {

        return view('admin.dashboard.jeep_booking.cancel_jeep_booking');
    }
}
