<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'user_id', 'title', 'slug', 'description', 'email', 'contact_number', 'location'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
