<?php

namespace App\model\Jeep;

use Illuminate\Database\Eloquent\Model;

class Jeep extends Model
{
    protected $table = 'jeep';

    protected $fillable = ['name', 'parkId', 'capacity'];
}
