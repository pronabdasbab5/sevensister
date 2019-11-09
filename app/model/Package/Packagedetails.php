<?php

namespace App\model\Package;

use Illuminate\Database\Eloquent\Model;

class Packagedetails extends Model
{
    protected $table = 'package_duration_details';

    public $incrementing = false;

    protected $fillable = ['id', 'packageBasicDetailsId', 'days', 'description'];
}
