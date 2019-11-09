<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use DB;

class Indexcomposer
{
    public function indexcomposer(View $view)
    {
        $newPackageData = DB::table('package_basic_details')
        				->select('package_basic_details.no_of_days', 'package_basic_details.duration')
                        ->distinct()
                        ->get();

        $view->with('newPackageData', ['newPackageDuraData' => $newPackageData]);
    }

    public function indexblogcomposer(View $view)
    {
        $newPackageData = DB::table('package_basic_details')
        				->select('package_basic_details.no_of_days', 'package_basic_details.duration')
                        ->distinct()
                        ->get();

        $view->with('newPackageData', ['newPackageDuraData' => $newPackageData]);
    }
}
?>