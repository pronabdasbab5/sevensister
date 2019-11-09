<?php

namespace App\model\Jeep;

use Illuminate\Database\Eloquent\Model;

class Jeepbooking extends Model
{
    protected $table = 'jeep_booking';

    protected $fillable = ['jeepId', 'timeId', 'rangeId', 'parkId', 'totalPrice', 'nationalityId', 'orderDate', 'mobileNo', 'totalJeep', 'email', 'totalPersons', 'age', 'personName', 'paymentRequestId', 'paymentType', 'paymentId', 'status'];
}
