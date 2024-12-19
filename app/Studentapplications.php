<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;

class Studentapplications extends Model
{
    protected $table = 'student_application';

    protected $fillable = [
        'school_id',
        'course_id',
        'student_id',
        'application_email',
        'student_grade_math',
        'student_grade_english',
        'student_grade_biology',
        'student_grade_physics',
        'student_grade_accounting',
        'status'
    ];
    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id', 'id');
    }
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
    public function school()
    {
        return $this->belongsTo(allinstitudes::class, 'school_id', 'id');
    }
}
