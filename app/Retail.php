<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Retail extends Model
{
    protected $fillable = [
        'user_id', 'title', 'slug', 'description', 'location', 'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function retailImages(){
        return $this->hasMany(RetailImages::class);
    }
}
