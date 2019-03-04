<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RetailImages extends Model
{
    protected $fillable = [
        'retail_id', 'name', 'path',
    ];

    public function retail(){
        return $this->belongsTo(Retail::class);
    }
}
