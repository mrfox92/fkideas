<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AseoIndustrial extends Model
{
    protected $fillable = [
        'title', 'description', 'location', 'status', 'file'
    ];
}
