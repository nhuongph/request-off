<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Approver extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'approvers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'request_id',
        'employee_id',
        'status',
        'comment',
    ];

    /**
     * Approver belongTo Employee.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee() {
        return $this->belongsTo('App\Models\Employee', 'employee_id');
    }

    /**
     * Approver hasOne Request.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function request() {
        return $this->hasOne('App\Models\Request', 'request_id');
    }
}
