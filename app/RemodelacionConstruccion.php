<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RemodelacionConstruccion extends Model
{
    protected $fillable = [
        'user_id', 'title', 'slug', 'description', 'location', 'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function remodelacionConstruccionImages(){
        return $this->hasMany(RemodelacionConstruccionImages::class);
    }
}
