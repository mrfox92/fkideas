<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RemodelacionConstruccionImages extends Model
{
    protected $fillable = [
        'remodelacion_id', 'name', 'path',
    ];

    public function remodelacionConstruccion(){
        return $this->belongsTo(RemodelacionConstruccion::class);
    }
}
