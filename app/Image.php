<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
    	'imageable_id', 'imageable_type', 'path'
    ];

    public function imageable()
    {
    	return $this->morphTo();
    }
}
