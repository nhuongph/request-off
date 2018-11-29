<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'request_id',
        'employee_id',
        'content',
        'comment_parent_id',
    ];

    /**
     * Comment belongTo Employee.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function employee() {
        return $this->belongsTo('App\Models\Employee', 'employee_id');
    }

    /**
     * Comment belongTo Request.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function request() {
        return $this->belongsTo('App\Models\Request', 'request_id');
    }

    /**
     * Comment belongTo Comment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parentComment() {
        return $this->belongsTo('App\Models\Comment', 'comment_parent_id');
    }
}
