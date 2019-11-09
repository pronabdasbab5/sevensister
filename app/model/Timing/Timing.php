<?php

namespace App\model\Timing;

use Illuminate\Database\Eloquent\Model;

class Timing extends Model
{
    protected $table = 'timing';

    protected $fillable = ['name', 'fromTime', 'toTime'];
}
