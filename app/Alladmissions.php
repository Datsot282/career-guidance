<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alladmissions extends Model
{
    protected $table = 'student_admission';
    protected $fillable = [
        'school_id',
        'student_id',
        'course_id'
    ];
    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id', 'id');
    }
    public function school()
    {
        return $this->belongsTo(allinstitudes::class, 'school_id', 'id');
    }
}
