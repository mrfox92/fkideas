<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RemodelacionConstruccion extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'location', 'status'
    ];

    public function remodelacionConstruccionImages(){
        return $this->hasMany(RemodelacionConstruccionImages::class);
    }
}
