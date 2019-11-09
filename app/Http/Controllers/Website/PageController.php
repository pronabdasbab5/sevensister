<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Park\Park;
use App\model\Jeep\Jeep;
use App\model\Jeep\Jeepbooking;
use App\model\Price\Price;
use App\model\Package\Package;
use App\model\Package\Packagedetails;
use App\model\Range\Range;
use App\model\Timing\Timing;
use App\model\Youtube\Youtube;
use DB;

class PageController extends Controller
{
    public function index() {

    	$park     = new Park;
        $parkData = $park->all();

        $youtube     = new Youtube;
        $youtubeData = $youtube->all();

        $package                 = new Package;
        $packageBasicDetailsData = $package->all();

    	return view('index', ['parkData' => $parkData, 'packageBasicDetails' => $packageBasicDetailsData, 'youtubeData' => $youtubeData]);
    }

    public function aboutUs() {
    	return view('about_us');
    }

    public function package($noOfDays) {

    	$package = new Package;

        $packageBasicDetailsData = $package
        							->where('no_of_days', $noOfDays)
        							->simplePaginate(5);

    	return view('package.package', ['packageBasicDetails' => $packageBasicDetailsData]);
    }

    public function packagedetails($packageId) {

    	$package        = new Package;
    	$packageDetails = new Packagedetails;

        $packageData = $package->where('id', $packageId)
        							->get();

        $packageDetailsData = $packageDetails->where('packageBasicDetailsId', $packageId)
        						->get();

    	return view('package.package-details', ['packageData' => $packageData, 'packageDetails' => $packageDetailsData]);
    }
}
