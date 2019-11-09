<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Jeep\Jeepbooking;
use App\model\Boat\Boat;
use App\model\Package\Packagebooking;
use App\model\Package\Package;
use App\model\Jeep\Jeep;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jeepbooking    = new Jeepbooking;
        $jeepbookingCnt = $jeepbooking->count();

        $boat    = new Boat;
        $boatCnt = $boat->count();

        $packagebooking    = new Packagebooking;
        $packagebookingCnt = $packagebooking->count();

        $package    = new Package;
        $packageCnt = $package->count();

        $jeep     = new Jeep;
        $jeepData = $jeep->join('park', 'jeep.parkId', '=', 'park.id')
                        ->get();

        return view('admin.dashboard.dashboard', ['jeepbookingCnt' => $jeepbookingCnt, 'boatCnt' => $boatCnt, 'packagebookingCnt' => $packagebookingCnt, 'packageCnt' => $packageCnt, 'jeepData' => $jeepData]);
    }
}
