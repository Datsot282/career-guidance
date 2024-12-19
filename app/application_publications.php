<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class application_publications extends Model
{
    protected $table = 'application_publications';
    protected $fillable = [
        'school_id',
        'course_id',
        'created_by_user_id',
    ];
    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id', 'id');
    }
    public function school()
    {
        return $this->belongsTo(allinstitudess::class, 'school_id', 'id');
    }
}
