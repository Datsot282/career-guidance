<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fuculties extends Model
{
    protected $table = 'school_fuculties';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'school_id'
    ];
    public function school()
    {
        return $this->belongsTo(allinstitudes::class, 'school_id', 'id');
    }
    public function course()
    {
        return $this->belongsTo(Courses::class, 'id', 'fuculty_id');
    }
}
