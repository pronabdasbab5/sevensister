<?php

namespace App\model\Boat;

use Illuminate\Database\Eloquent\Model;

class Boat extends Model
{
    protected $table = 'boat';

    protected $fillable = ['name', 'mobileNo', 'email', 'totalPersons', 'mealPlan', 'checkIn', 'checkOut', 'bookingStatus'];
}
