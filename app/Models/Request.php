<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'requests';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'employee_id',
        'branch_id',
        'status',
        'content',
    ];

    /**
     * Request belongTo Employee.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee() {
        return $this->belongsTo('App\Models\Employee', 'employee_id');
    }

    /**
     * Request belongTo Branch.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function request() {
        return $this->belongsTo('App\Models\Branch', 'branch_id');
    }
}
