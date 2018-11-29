<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    use Notifiable;

    /**
     * Status using.
     *
     * @var integer
     */
    const STATUS_USING = 1;

    /**
     * Status stop.
     *
     * @var integer
     */
    const STATUS_STOP = 2;

    /**
     * Role admin system.
     *
     * @var integer
     */
    const ROLE_ADMIN = 1;

    /**
     * Role human resource.
     *
     * @var integer
     */
    const ROLE_HR = 2;

    /**
     * Role approver.
     *
     * @var integer
     */
    const ROLE_APPROVER = 3;

    /**
     * Role employee.
     *
     * @var integer
     */
    const ROLE_EMPLOYEE = 4;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'employees';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'user_name',
        'password',
        'branch_id',
        'company_id',
        'email',
        'phone_number',
        'address',
        'start_date',
        'end_date',
        'role',
        'status',
        'email_verified_at',
        'remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Employee belongTo Branch.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function branch() {
        return $this->belongsTo('App\Models\Branch', 'branch_id');
    }

    /**
     * Employee belongTo Company.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company() {
        return $this->belongsTo('App\Models\Company', 'company_id');
    }
}
