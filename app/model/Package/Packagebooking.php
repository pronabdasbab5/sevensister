<?php

namespace App\model\Package;

use Illuminate\Database\Eloquent\Model;

class Packagebooking extends Model
{
    protected $table = 'package_booking';

    protected $fillable = ['packageId', 'personName', 'contactNo', 'address', 'days', 'arrivalDate', 'noOfAdult', 'noOfKids', 'tourBudget', 'activities', 'regions', 'bookingStatus'];
}
