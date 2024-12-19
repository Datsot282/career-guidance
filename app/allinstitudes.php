<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class allinstitudes extends Model
{
    protected $table = 'all_schools';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
        'email',
        'contacts',
        'location'
];
}
