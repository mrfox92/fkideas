<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AseoIndustrial extends Model
{
    protected $fillable = [
        'user_id', 'title', 'slug', 'excerpt', 'description', 'location', 'status', 'file'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
