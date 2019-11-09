<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['namespace'=>'Website'],function(){
   Route::get('/', 'PageController@index')->name('index');

   Route::prefix('sevensister')->group(function () {
    Route::get('/aboutus', 'PageController@aboutUs')->name('aboutus');
    }); 
});


Route::get('/contactus', function () {
    return view('contact_us');
});
Route::get('/package/{no_of_days}', 'Website\PageController@package')->name('package');
Route::get('/packagedetails/{packageId}', 'Website\PageController@packagedetails')->name('packagedetails');

//Package Booking
Route::post('/add_p_booking/{packageId}', 'Website\BookingController@add_p_booking')->name('add_p_booking');
//End of Package Booking

Route::get('/kaziranganationalpark', function () {
    return view('national_park.assam.kaziranga_national_park');
});
Route::get('/manasnationalpark', function () {
    return view('national_park.assam.manas_national_park');
});
Route::get('/dibrusaikhowanationalpark', function () {
    return view('national_park.assam.dibrusaikhowa_national_park');
});
Route::get('/namerinationalpark', function () {
    return view('national_park.assam.nameri_national_park');
});
Route::get('/orangnationalpark', function () {
    return view('national_park.assam.orang_national_park');
});
Route::get('/aboutnortheast', function () {
    return view('about_north_east');
});

Route::get('/festivalnortheast', function () {
    return view('festival_north_east');
});

Route::get('/wildlifesanctuaries', function () {
    return view('wildlife_sanctuaries');
});

Route::get('/assam', function () {
    return view('destination_of_northeast.assam');
});

Route::get('/arunachlpradesh', function () {
    return view('destination_of_northeast.arunachl_pradesh');
});

Route::get('/meghalaya', function () {
    return view('destination_of_northeast.meghalaya');
});

Route::get('/nagaland', function () {
    return view('destination_of_northeast.nagaland');
});

Route::get('/manipur', function () {
    return view('destination_of_northeast.manipur');
});

Route::get('/mizoram', function () {
    return view('destination_of_northeast.mizoram');
});

Route::get('/tripura', function () {
    return view('destination_of_northeast.tripura');
});

Route::get('/sikkim', function () {
    return view('destination_of_northeast.sikkim');
});

Route::get('/single_blog', 'Website\BlogController@single_blog')->name('single_blog');
Route::get('/blog_details/{postId}', 'Website\BlogController@blog_details')->name('blog_details');

//Kaziranga Jeep Safari
Route::get('/kaziranga_jeep_safari', 'Website\BookingController@new_k_booking')->name('new_k_booking');
Route::post('/add_k_booking/{parkId}', 'Website\BookingController@add_k_booking')->name('add_k_booking');
Route::get('/pay-success/{lastInsertedId}', 'Website\BookingController@success');
//End of Kaziranga Jeep Safari

//Jeep and amount Checking
Route::get('/jeep/jeep_checking/{parkId}/{persons}', function(App\model\Jeep\Jeep $jeep, $parkId, $persons) {

    $jeepData = $jeep->where('parkId', $parkId)->get();

    $totalJeep = ceil($persons/$jeepData[0]['capacity']);

    print $totalJeep;
});

Route::get('/jeep/range_checking/{parkId}', function(App\model\Price\Price $price, $parkId) {

    $range_data = DB::table('price')->where('price.parkId', $parkId)
                            ->join('range', 'price.rangeId', '=', 'range.id')
                            ->select('price.rangeId', 'range.range')
                            ->distinct()
                            ->get();

    if ($parkId == 1){

        $timing_data = DB::table('timing')->where('fromTime', '!=', '')->where('toTime', '!=', '')->get();
        $tData       = "<option selected disabled>Jeep Safari Time</option>";
    }
    else{

        $timing_data = DB::table('timing')->whereNull('fromTime')->whereNull('toTime')->get();
        $tData       = "<option selected disabled>Jeep Safari Time</option>";
    }

    if (count($range_data) > 0) {
        
        $rData = "<div class=\"col-md-12\"><div class=\"form-group\"><select class=\"form-control\" id=\"forest_range\" name=\"forest_range\" onchange=\"field_blank()\" required><option selected disabled>Select Forest Range</option>";

        foreach ($range_data as $key => $value) {
            $rData = $rData."<option value=\"$value->rangeId\">$value->range</option>";
        }

        $rData = $rData."</select><span id=\"msg_forest_range\" style=\"color: blue; font-weight: bold;\"></span></div></div>";

        foreach ($timing_data as $key => $value) {

            if (!empty($value->fromTime))
                $time = ": ($value->fromTime - $value->toTime)";
            else
                $time = "";

            $tData = $tData."<option value=\"$value->id\">$value->name $time</option>";
        }

        print $tData."&".$rData;
    } else {

        $rData = "";
        foreach ($timing_data as $key => $value) {

            if (!empty($value->fromTime))
                $time = ": ($value->fromTime - $value->toTime)";
            else
                $time = "";

            $tData = $tData."<option value=\"$value->id\">$value->name $time</option>";
        }

        print $tData."&".$rData;
    }
});

Route::get('/jeep/calculate_k_jeep_amount/{parkId}/{forestRangeId}/{nationalityId}/{persons}', function(App\model\Price\Price $price, $parkId, $forestRangeId, $nationalityId, $persons) {

    $jeepData  = DB::table('jeep')->where('parkId', $parkId)->get();
    $totalJeep = ceil($persons/$jeepData[0]->capacity);

    $priceData = $price->where('parkId', $parkId)->where('rangeId', $forestRangeId)->where('nationalityId', $nationalityId)->get();

    $totalPrice = $priceData[0]['price'] * $totalJeep;

    print $totalPrice;
});

Route::get('/jeep/calculate_m_jeep_amount/{parkId}/{bookTimeId}/{nationalityId}/{persons}', function(App\model\Price\Price $price, $parkId, $bookTimeId, $nationalityId, $persons) {

    $jeepData  = DB::table('jeep')->where('parkId', $parkId)->get();
    $totalJeep = ceil($persons/$jeepData[0]->capacity);

    $priceData = $price->where('parkId', $parkId)->where('timingId', $bookTimeId)->where('nationalityId', $nationalityId)->get();

    $totalPrice = $priceData[0]['price'] * $totalJeep;

    print $totalPrice;
});
//End of Jeep and amount  Checking

//Manash Jeep Safari
Route::get('/manas_jeep_safari', 'Website\BookingController@new_m_booking')->name('new_m_booking');
//End of Manash Jeep Safari

//Manash Booking Route
Route::post('/add_m_booking/{parkId}', 'Website\BookingController@add_m_booking')->name('add_m_booking');
Route::get('/pay-msuccess/{lastInsertedId}', 'Website\BookingController@msuccess');
//End of Manash Booking Price

//Home Page Booking
Route::post('add_booking', 'Website\BookingController@add_booking')->name('add_booking');
//End of Home Page Booking

Route::get('/tc', function () {
    return view('opp&tc');
});

Route::get('/booking_online_offline', function () {
    return view('booking_online_offline');
});

Route::get('/house_boat', function () {
    return view('house_boat');
})->name('house_boat');

//Home Page Booking
Route::post('add_book_house_boat', 'Website\BookingController@add_book_house_boat')->name('add_book_house_boat');
//End of Home Page Booking


Route::get('/admin/login', 'Auth\LoginController@showLoginForm');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');

Auth::routes();

Route::middleware(['auth'])->group(function () {

    Route::get('/admin/home', 'HomeController@index')->name('home');

    Route::namespace('Auth')->group(function () {
        Route::post('/logout', 'LoginController@logout')->name('logout');
    });

    Route::namespace('Park')->group(function () {

        Route::get('/admin/new_park', 'ParkController@new_park')->name('new_park');
        Route::post('add_park', 'ParkController@add_park')->name('add_park');
        Route::get('/admin/all_park', 'ParkController@all_park')->name('all_park');
        Route::get('/admin/single_record_park/{parkId}', 'ParkController@single_record_park')->name('single_record_park');
        Route::post('/admin/edit_park/{parkId}', 'ParkController@edit_park')->name('edit_park');
    });

    Route::namespace('Timing')->group(function () {

        Route::get('/admin/new_timing', 'TimingController@new_timing')->name('new_timing');
        Route::post('add_timing', 'TimingController@add_timing')->name('add_timing');
        Route::get('/admin/all_timing', 'TimingController@all_timing')->name('all_timing');
        Route::get('/admin/single_record_timing/{timeId}', 'TimingController@single_record_timing')->name('single_record_timing');
        Route::post('/admin/edit_timing/{timeId}', 'TimingController@edit_timing')->name('edit_timing');
    });

    Route::namespace('Jeep')->group(function () {

        Route::get('/admin/new_jeep', 'JeepController@new_jeep')->name('new_jeep');
        Route::post('add_jeep', 'JeepController@add_jeep')->name('add_jeep');
        Route::get('/admin/all_jeep', 'JeepController@all_jeep')->name('all_jeep');
        Route::get('/admin/single_record_jeep/{jeepId}', 'JeepController@single_record_jeep')->name('single_record_jeep');
        Route::post('/admin/edit_jeep/{jeepId}', 'JeepController@edit_jeep')->name('edit_jeep');
    });

    Route::namespace('Range')->group(function () {

        Route::get('/admin/new_range', 'RangeController@new_range')->name('new_range');
        Route::post('add_range', 'RangeController@add_range')->name('add_range');
        Route::get('/admin/all_range', 'RangeController@all_range')->name('all_range');
        Route::get('/admin/single_record_range/{rangeId}', 'RangeController@single_record_range')->name('single_record_range');
        Route::post('/admin/edit_range/{rangeId}', 'RangeController@edit_range')->name('edit_range');
    });

    Route::namespace('Price')->group(function () {

        Route::get('/admin/new_price', 'PriceController@new_price')->name('new_price');
        Route::post('add_price', 'PriceController@add_price')->name('add_price');
        Route::get('/admin/all_price', 'PriceController@all_price')->name('all_price');
        Route::get('/admin/single_record_price/{priceId}', 'PriceController@single_record_price')->name('single_record_price');
        Route::post('/admin/edit_price/{priceId}', 'PriceController@edit_price')->name('edit_price');
    });

    Route::namespace('Package')->group(function () {

        Route::get('/admin/new_package', 'PackageController@new_package')->name('new_package');
        Route::get('/admin/new_package_detail/{packageId}/{noOfDays}', 'PackageController@new_package_detail')->name('new_package_detail');
        Route::post('add_package', 'PackageController@add_package')->name('add_package');
        Route::post('add_package_details/{packageId}', 'PackageController@add_package_details')->name('add_package_details');
        Route::get('/admin/all_package', 'PackageController@all_package')->name('all_package');
        Route::post('/admin/package_data', 'PackageController@package_data')->name('package_data');
        Route::get('/admin/single_record_package_basic/{packageId}', 'PackageController@single_record_package_basic')->name('single_record_package_basic');
        Route::post('/admin/save_basic_package/{packageId}', 'PackageController@save_basic_package')->name('save_basic_package');
        Route::get('/admin/single_record_package_detail/{packageId}', 'PackageController@single_record_package_detail')->name('single_record_package_detail');
        Route::post('save_package_details/{packageId}', 'PackageController@save_package_details')->name('save_package_details');
    });

    Route::namespace('Booking')->group(function () {

        //Start Jeep Booking Route
        Route::get('/admin/new_jeep_booking', 'JeepbookingController@new_jeep_booking')->name('new_jeep_booking');
        Route::get('/admin/complete_jeep_booking', 'JeepbookingController@complete_jeep_booking')->name('complete_jeep_booking');
         Route::get('/admin/cancel_jeep_booking', 'JeepbookingController@cancel_jeep_booking')->name('cancel_jeep_booking');
        Route::post('/admin/jeep_booking_data', 'JeepbookingController@jeep_booking_data')->name('jeep_booking_data');
        Route::get('/admin/jeep_booking_invoice/{bookingId}', 'JeepbookingController@jeep_booking_invoice')->name('jeep_booking_invoice');
        Route::get('/admin/complete_jeep_booking_status/{bookingId}/{bookingStatus}', 'JeepbookingController@complete_jeep_booking_status')->name('complete_jeep_booking_status');
        Route::get('/admin/cancel_jeep_booking_status/{bookingId}/{bookingStatus}', 'JeepbookingController@cancel_jeep_booking_status')->name('cancel_jeep_booking_status');
        //End of Jeep Booking Route

        //Start Boat Booking Route
        Route::get('/admin/new_boat_booking', 'BoatbookingController@new_boat_booking')->name('new_boat_booking');
        Route::get('/admin/accept_boat_booking', 'BoatbookingController@accept_boat_booking')->name('accept_boat_booking');
         Route::get('/admin/cancel_boat_booking', 'BoatbookingController@cancel_boat_booking')->name('cancel_boat_booking');
        Route::post('/admin/boat_booking_data', 'BoatbookingController@boat_booking_data')->name('boat_booking_data');
        Route::get('/admin/accept_boat_booking_status/{bookingId}/{bookingStatus}', 'BoatbookingController@accept_boat_booking_status')->name('accept_boat_booking_status');
        Route::get('/admin/cancel_boat_booking_status/{bookingId}/{bookingStatus}', 'BoatbookingController@cancel_boat_booking_status')->name('cancel_boat_booking_status');
        //End of Boat Booking Route

        //Start Package Booking Route
        Route::get('/admin/new_package_booking', 'PackagebookingController@new_package_booking')->name('new_package_booking');
        Route::get('/admin/accept_package_booking', 'PackagebookingController@accept_package_booking')->name('accept_package_booking');
         Route::get('/admin/cancel_package_booking', 'PackagebookingController@cancel_package_booking')->name('cancel_package_booking');
        Route::post('/admin/package_booking_data', 'PackagebookingController@package_booking_data')->name('package_booking_data');
        Route::get('/admin/accept_package_booking_status/{bookingId}/{bookingStatus}', 'PackagebookingController@accept_package_booking_status')->name('accept_package_booking_status');
        Route::get('/admin/cancel_package_booking_status/{bookingId}/{bookingStatus}', 'PackagebookingController@cancel_package_booking_status')->name('cancel_package_booking_status');
        //End of Package Booking Route
    });

    Route::namespace('Blog')->group(function () {

        Route::get('/admin/new_post', 'BlogController@new_post')->name('new_post');
        Route::put('/admin/add_post', 'BlogController@add_post')->name('add_post');
        Route::get('/admin/all_post', 'BlogController@all_post')->name('all_post');
        Route::post('/admin/post_data', 'BlogController@post_data')->name('post_data');
        Route::get('/admin/unpublish_publish_status/{postId}/{status}', 'BlogController@unpublish_publish_status')->name('unpublish_publish_status');
        Route::get('/admin/delete_post/{postId}', 'BlogController@delete_post')->name('delete_post');
        Route::get('/admin/edit_post/{postId}', 'BlogController@editPostForm')->name('edit_post');
        Route::put('/admin/update_post/{postId}', 'BlogController@updatePost')->name('update_post');
        Route::post('ckeditor/upload', 'BlogController@upload')->name('ckeditor.upload');
    });

    Route::namespace('Youtube')->group(function () {

        Route::get('/admin/new_video', 'YoutubeController@new_video')->name('new_video');
        Route::post('add_video', 'YoutubeController@add_video')->name('add_video');
        Route::get('/admin/all_video', 'YoutubeController@all_video')->name('all_video');
        Route::get('/admin/remove_video/{videoId}', 'YoutubeController@remove_video')->name('remove_video');
        // Route::post('/admin/edit_range/{rangeId}', 'RangeController@edit_range')->name('edit_range');
    });
});


Route::namespace('Blog')->group(function () {
    Route::get('/post_images/{postImg}', 'BlogController@post_images')->name('post_images');
});
