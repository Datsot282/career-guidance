<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class allinstitudess extends Model
{
    protected $table = 'all_institudes';
    protected $fillable = [
        'name',
        'description',
        'email',
        'password',
        'contacts',
        'location',
        'date_added',
    ];
}
