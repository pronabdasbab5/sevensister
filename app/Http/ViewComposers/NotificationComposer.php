<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use DB;

class NotificationComposer
{
    public function notification(View $view)
    {
        $newJeepData = DB::table('jeep_booking')
                        ->where('bookingStatus', '1')
                        ->count();

        $newBoatData = DB::table('boat')
                        ->where('bookingStatus', '1')
                        ->count();

        $newPackageData = DB::table('package_booking')
                        ->where('bookingStatus', '1')
                        ->count();

        $view->with('newBookingData', ['newJeepBookingData' => $newJeepData, 'newBoatBookingData' => $newBoatData, 'newPackageBookingData' => $newPackageData]);
    }
}
?>