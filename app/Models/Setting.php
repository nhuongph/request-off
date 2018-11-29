<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'settings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'morning_start_time',
        'morning_end_time',
        'afternoon_start_time',
        'afternoon_end_time',
        'minute_off_max',
        'minute_off_min',
    ];
}
