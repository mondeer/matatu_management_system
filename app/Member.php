<?php

namespace hilda;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['owner_name', 'driver_name', 'gender', 'motor_reg', 'logbook', 'dor', 'phone'];
}
