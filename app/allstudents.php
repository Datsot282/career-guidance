<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class allstudents extends Model
{
    protected $table = 'system_student';
    protected $fillable = [
        'fname',
        'lname',
        'gender',
        'dateofbirth',
        'email',
        'contact',
        'math',
        'english',
        'biology',
        'physics',
        'accounting'
    ];
}
