<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $table = 'school_courses';
    public $timestamps = false;
    protected $fillable = [
        'fuculty_id',
        'school_id',
        'course_name',
        'math',
        'english',
        'biology',
        'physics',
        'accounting'
    ];
    public function school()
    {
        return $this->belongsTo(allinstitudes::class, 'school_id', 'id');
    }
    public function faculty()
    {
        return $this->belongsTo(Fuculties::class, 'fuculty_id', 'id');
    }
}
