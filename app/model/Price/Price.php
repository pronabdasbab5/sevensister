<?php

namespace App\model\Price;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'price';

    protected $fillable = ['parkId', 'rangeId', 'jeepId', 'timingId', 'price', 'nationality', ];
}
