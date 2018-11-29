<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestDetail extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'request_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'request_id',
        'start_time',
        'end_time',
        'total_minutes',
    ];

    /**
     * RequestDetail belongTo Request.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function request() {
        return $this->belongsTo('App\Models\Request', 'request_id');
    }
}
