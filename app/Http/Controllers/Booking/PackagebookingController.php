<?php

namespace App\Http\Controllers\Booking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Package\Package;
use App\model\Package\Packagebooking;
use DB;

class PackagebookingController extends Controller
{
    public function new_package_booking() {

    	return view('admin.dashboard.package_booking.new_package_booking');
    }

    public function accept_package_booking() {

        return view('admin.dashboard.package_booking.accept_package_booking');
    }

    public function cancel_package_booking() {

        return view('admin.dashboard.package_booking.cancel_package_booking');
    }

    public function package_booking_data(Request $request) {

        $package        = new Package;
        $packageBooking = new Packagebooking;

        $columns = array( 
                            0 => 'id', 
                            1 => 'packageName',
                            2 => 'duration',
                            3 => 'days',
                            4 => 'personName',
                            5 => 'contactNo',
                            6 => 'address',
                            7 => 'days',
                            8 => 'arrivalDate',
                            9 => 'noOfAdult',
                            10=> 'noOfKids',
                            11=> 'tourBudget',
                            12=> 'activities',
                            13=> 'regions',
                            14=> 'bookingDate',
                            15=> 'action',
                        );

        $totalData = $packageBooking->where('bookingStatus', $request->input('status'))->count();

        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir   = $request->input('order.0.dir');

        if(empty($request->input('search.value'))) {            
            
            $booking_data = DB::table('package_booking')
                            ->where('package_booking.bookingStatus', $request->input('status'))
                            ->join('package_basic_details', 'package_booking.packageId', '=', 'package_basic_details.id')
                            ->select('package_basic_details.packageName', 'package_basic_details.duration', 'package_basic_details.no_of_days', 'package_booking.personName', 'package_booking.contactNo', 'package_booking.address', 'package_booking.days', 'package_booking.arrivalDate', 'package_booking.noOfAdult', 'package_booking.noOfKids', 'package_booking.tourBudget', 'package_booking.activities', 'package_booking.regions', 'package_booking.created_at', 'package_booking.bookingStatus', 'package_booking.id as pid')
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy('package_booking.'.$order,$dir)
                            ->get();
        }
        else {

            $search = $request->input('search.value'); 

            $booking_data = DB::table('package_booking')
                            ->where('package_booking.bookingStatus', $request->input('status'))
                            ->join('package_basic_details', 'package_booking.packageId', '=', 'package_basic_details.id')
                            ->select('package_basic_details.packageName', 'package_basic_details.duration', 'package_basic_details.no_of_days', 'package_booking.personName', 'package_booking.contactNo', 'package_booking.address', 'package_booking.days', 'package_booking.arrivalDate', 'package_booking.noOfAdult', 'package_booking.noOfKids', 'package_booking.tourBudget', 'package_booking.activities', 'package_booking.regions', 'package_booking.created_at', 'package_booking.bookingStatus', 'package_booking.id as pid')
                            ->orWhere('package_basic_details.packageName', 'LIKE',"%{$search}%")
                            ->orWhere('package_basic_details.duration', 'LIKE',"%{$search}%")
                            ->orWhere('package_basic_details.no_of_days', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.personName', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.contactNo', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.address', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.arrivalDate', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.noOfAdult', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.noOfKids', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.tourBudget', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.activities', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.regions', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy('package_booking.'.$order,$dir)
                            ->get();    

            $totalFiltered = DB::table('package_booking')
                            ->where('package_booking.bookingStatus', $request->input('status'))
                            ->join('package_basic_details', 'package_booking.packageId', '=', 'package_basic_details.id')
                            ->select('package_basic_details.packageName', 'package_basic_details.duration', 'package_basic_details.no_of_days', 'package_booking.personName', 'package_booking.contactNo', 'package_booking.address', 'package_booking.days', 'package_booking.arrivalDate', 'package_booking.noOfAdult', 'package_booking.noOfKids', 'package_booking.tourBudget', 'package_booking.activities', 'package_booking.regions', 'package_booking.created_at', 'package_booking.bookingStatus', 'package_booking.id as pid')
                            ->orWhere('package_basic_details.packageName', 'LIKE',"%{$search}%")
                            ->orWhere('package_basic_details.duration', 'LIKE',"%{$search}%")
                            ->orWhere('package_basic_details.no_of_days', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.personName', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.contactNo', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.address', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.arrivalDate', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.noOfAdult', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.noOfKids', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.tourBudget', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.activities', 'LIKE',"%{$search}%")
                            ->orWhere('package_booking.regions', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();

        if(!empty($booking_data)) {

            $cnt = 1;

            foreach ($booking_data as $single_data) {

                $action = "";

                if($single_data->bookingStatus == 1){

                    $action = "<a class=\"btn btn-success\" href=\"".url('/admin/accept_package_booking_status', ['bookingId' => $single_data->pid, 'bookingStatus' => 2])."\">Accept Booking</a>&nbsp;&nbsp;<a href=\"".url('/admin/cancel_package_booking_status', ['bookingId' => $single_data->pid, 'bookingStatus' => 3])."\" class=\"btn btn-danger\">Cancel Booking</a>";
                }
                else if($single_data->bookingStatus == 2){

                    $action = "<a href=\"".url('/admin/cancel_boat_booking_status', ['bookingId' => $single_data->pid, 'bookingStatus' => 3])."\" class=\"btn btn-danger\">Cancel Booking</a>";
                }
                else {

                    $action = "Booking has been cancelled";
                }

                $nestedData['id']           = $cnt;
                $nestedData['packageName']  = $single_data->packageName;
                $nestedData['duration']     = $single_data->duration;
                $nestedData['days']         = $single_data->no_of_days;
                $nestedData['personName']   = $single_data->personName;
                $nestedData['contactNo']    = $single_data->contactNo;
                $nestedData['address']      = $single_data->address;
                $nestedData['days']         = $single_data->days;
                $nestedData['arrivalDate']  = $single_data->arrivalDate;
                $nestedData['noOfAdult']    = $single_data->noOfAdult;
                $nestedData['noOfKids']     = $single_data->noOfKids;
                $nestedData['tourBudget']   = $single_data->tourBudget;
                $nestedData['activities']   = $single_data->activities;
                $nestedData['regions']      = $single_data->regions;
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

    public function accept_package_booking_status($bookingId, $status) {

        $packageBooking = new Packagebooking;

        $packageBooking->where('id', $bookingId)->update(['bookingStatus' => $status]);

        return view('admin.dashboard.package_booking.accept_package_booking');
    }

    public function cancel_package_booking_status($bookingId, $status) {

        $packageBooking = new Packagebooking;

        $packageBooking->where('id', $bookingId)->update(['bookingStatus' => $status]);

        return view('admin.dashboard.package_booking.cancel_package_booking');
    }
}
