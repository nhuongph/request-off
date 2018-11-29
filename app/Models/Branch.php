<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'branches';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'company_id',
        'email',
        'phone_number',
    ];

    /**
     * Branch belongTo Company.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company() {
        return $this->belongsTo('App\Models\Company', 'company_id');
    }
}
