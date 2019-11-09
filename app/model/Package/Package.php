<?php

namespace App\model\Package;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'package_basic_details';

    protected $fillable = ['packageName', 'duration', 'no_of_days'];
}
