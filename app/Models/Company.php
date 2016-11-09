<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function partners()
    {
        return $this->hasMany('App\Models\Partner');
    }

}
