<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo('App\Models\Company');
    }
}
