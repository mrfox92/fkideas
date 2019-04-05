<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retail extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'location', 'status'
    ];

    public function retailImages(){
        return $this->hasMany(RetailImages::class);
    }
}
