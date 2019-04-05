<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'title', 'description', 'email', 'mobile_number', 'phone_number', 'location'
    ];
}
