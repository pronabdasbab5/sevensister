<?php

namespace App\Http\Controllers\Package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\model\Package\Package;
use App\model\Package\Packagedetails;
use DB;

class PackageController extends Controller
{
    public function new_package () {

    	return view('admin.dashboard.package.new_package');
    }

    public function new_package_detail ($packageId, $noOfDays) {

    	return view('admin.dashboard.package.new_package_detail', ['packageId' => $packageId, 'noOfDays' => $noOfDays]);
    }

    public function add_package (Request $request) {

    	$request->validate([
	        'package_name'=> 'bail|required',
	        'duration'    => 'required',
	        'no_of_days'  => 'required|numeric',
            'tour_desc'   => 'required'
	    ],
		[
	        'package_name.required' => 'The package name is required',
	        'duration.required'     => 'The duration is required',
	        'no_of_days.required'   => 'The no. of days is required and also be a numeric',
            'tour_desc.required'    => 'The tour description is required',
	    ]);

    	$package = new Package;

        $row_package = $package->where('packageName', $request->input('package_name'))->count();

        if ($row_package > 0) {
            
            return redirect()->route('new_package')->with('msg', 'Record already available.');
        }
        else {

            $packageId = $package->count() + 1;

            $package->packageName= ucwords(strtolower($request->input('package_name')));
            $package->duration   = $request->input('duration');
            $package->no_of_days = $request->input('no_of_days');
            $package->tourDesc   = $request->input('tour_desc');
            $package->id         = $packageId;

            if($package->save()) {

                return redirect()->route('new_package_detail', ['packageId' => $packageId, 'noOfDays' => $request->input('no_of_days')]);
            }
            else
                return redirect()->route('new_package')->with('msg', 'Something wrong while adding');
        }
    }

    public function add_package_details (Request $request, $packageId) {

        $packageDetails = new Packagedetails;

        if ($request->has('days') && $request->has('description')) {

            for ($i=0; $i < count($request->input('days')); $i++){

                DB::table('package_duration_details')->insert(
                                        ['id' => $packageDetails->count() + 1, 'packageBasicDetailsId' =>  $packageId, 'days' => ucwords(strtolower($request->input('days')[$i])), 'description' => $request->input('description')[$i]]
                                    );
            }
            
            return redirect()->route('new_package')->with('msg', 'Package has been added.');
        } else {

            $packageDetails->where('id', $packageId)->delete();

            return redirect()->route('new_package')->with('msg', 'Something wrong while adding');
        }
    }

    public function all_package () {

        return view('admin.dashboard.package.all_package');
    }

    public function package_data(Request $request) {

        $package = new Package;

        $columns = array( 
                            0 => 'id', 
                            1 => 'packageName',
                            2 => 'duration',
                            3 => 'noOfDays',
                            4 => 'desc',
                            5 => 'action',
                        );

        $totalData = $package->count();

        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir   = $request->input('order.0.dir');

        if(empty($request->input('search.value'))) {            
            
            $package_data = DB::table('package_basic_details')
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy('package_basic_details.'.$order,$dir)
                            ->get();
        }
        else {

            $search = $request->input('search.value'); 

            $package_data = DB::table('package_basic_details')
                            ->where('package_basic_details.packageName', $request->input('status'))
                            ->orWhere('package_basic_details.duration', 'LIKE',"%{$search}%")
                            ->orWhere('package_basic_details.no_of_days', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy('package_basic_details.'.$order,$dir)
                            ->get();    

            $totalFiltered = DB::table('package_basic_details')
                            ->where('package_basic_details.packageName', $request->input('status'))
                            ->orWhere('package_basic_details.duration', 'LIKE',"%{$search}%")
                            ->orWhere('package_basic_details.no_of_days', 'LIKE',"%{$search}%")
                            ->count();
        }

        $data = array();

        if(!empty($package_data)) {

            $cnt = 1;

            foreach ($package_data as $single_data) {

                $action = "<a href=\"".url('/admin/single_record_package_basic', ['packageId' => $single_data->id])."\" class=\"btn btn-danger\">Edit</a>";

                $nestedData['id']          = $cnt;
                $nestedData['packageName'] = $single_data->packageName;
                $nestedData['duration']    = $single_data->duration;
                $nestedData['noOfDays']    = $single_data->no_of_days;
                $nestedData['desc']        = substr($single_data->tourDesc, 0, 150)."...";
                $nestedData['action']      = $action;

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

    public function single_record_package_basic($packageId) {

        $package = new Package;

        $package_data = $package->find($packageId);

        return view('admin.dashboard.package.package_basic' , ['data' => $package_data]);
    }

    public function save_basic_package(Request $request, $packageId) {

        $request->validate([
            'package_name'=> 'bail|required',
            'duration'    => 'required',
            'no_of_days'  => 'required|numeric',
            'tour_desc'   => 'required'
        ],
        [
            'package_name.required' => 'The package name is required',
            'duration.required'     => 'The duration is required',
            'no_of_days.required'   => 'The no. of days is required and also be a numeric',
            'tour_desc.required'    => 'The tour description is required',
        ]);

        $package = new Package;

        $packageUpdate = $package->where('id', $packageId)->update(['packageName' => ucwords(strtolower($request->input('package_name'))), 'duration' => $request->input('duration'), 'no_of_days' => $request->input('no_of_days'), 'tourDesc' => $request->input('tour_desc')]);

        if($packageUpdate) {

            return redirect()->route('single_record_package_detail', ['packageId' => $packageId]);
        }
        else
            return redirect()->route('single_record_package_basic', ['packageId' => $packageId])->with('msg', 'Something wrong while saving');
    }

    public function single_record_package_detail ($packageId) {

        $packageDetails = new Packagedetails;

        $packageDetailsData = $packageDetails->where('packageBasicDetailsId', $packageId)->get();

        return view('admin.dashboard.package.package_detail', ['packageDetailsData' => $packageDetailsData, 'packageId' => $packageId]);
    }

    public function save_package_details (Request $request, $packageId) {

        $packageDetails = new Packagedetails;

        if ($request->has('days') && $request->has('description')) {

            for ($i=0; $i < count($request->input('days')); $i++){

                DB::table('package_duration_details')
                    ->where('id', $request->input('packageDetailId')[$i])
                    ->update(['days' => ucwords(strtolower($request->input('days')[$i])), 'description' => $request->input('description')[$i]]);
            }
            
            return redirect()->route('single_record_package_detail', ['packageId' => $packageId])->with('msg', 'Package Detail has been updated.');
        } else {

            $packageDetails->where('id', $packageId)->delete();

            return redirect()->route('new_package')->with('msg', 'Something wrong while adding');
        }
    }
}
